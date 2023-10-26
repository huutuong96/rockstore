<?php
    session_start();
    extract($_REQUEST);
    ob_start();
    include "../model_DAO/categorys.php";
    include "../model_DAO/products.php";
    include "../model_DAO/pdo.php";
    include "../model_DAO/materials.php";
    include "../model_DAO/public.php";
    include "../model_DAO/users.php";
    include "../model_DAO/blog.php";
    include "../model_DAO/bil.php";
    include "../model_DAO/messenges.php";

    $sl_cart = isset($_SESSION["shopping_cart"]) ? count($_SESSION["shopping_cart"]) : 0;
    $sl_like = isset($_SESSION["like_sp"]) ? count($_SESSION["like_sp"]) : 0;
    include "views/header.php";

    if(isset($page)){
        switch($page){
            case 'shop':
                if(isset($_GET["danh_muc"]) || isset($_GET["category_show"])){
                    $id_dm = $_GET["danh_muc"] ?? $_GET["category_show"];
                    $category = dm_select_by_id($id_dm);
                }

                $list_category = dm_select_all();
                $list_materials = cl_select_all();

                if(isset($_GET["category_show"])){
                    $list_product_all = sp_select_all(9,( isset($_GET["number"]) ? $_GET["number"]*9: null),$_GET["category_show"]);

                }else{
                    $list_product_all = sp_select_all(9,( isset($_GET["number"]) ? $_GET["number"]*9: null),( isset($_GET["show"]) ? array($_GET["show"],$_GET["danh_muc"]): null));
                }
                $products_number = sp_exist();
                if(isset($search)){
                    if(count(search($search)) > 0){
                        $list_product_all = search($search);
                    }else echo '<div class="container mt-5">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Thông báo!</strong> Hiện tại không có sản phẩm nào trong danh sách.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>';
                }
                

                include "views/shop.php";
                break; 

            case 'product-details':
                $product = sp_select_by_id($_GET['id']);
                $list_product_all = sp_select_all(4);
                $list_msg = show_msg($_GET['id']);
                include "views/product_details.php";   
                break;
            case 'contact':
                include "views/contact.php";         
                break;
            case 'checkout':
                if(isset($thanh_toan)){
                    if(isset($_SESSION["user"])){
                    $id_kh = $_SESSION["user"]["id"];
                    $user = user_select_by_id($id_kh);
                    extract($user);
                    }
                    include "views/checkout.php"; 
                    break;         
                }
                if(isset($hoan_tat)){
                    $date = new datetime();
                    $date = $date->format("Y/m/d");
                    if(isset($_SESSION["user"])){
                        $id_kh = $_SESSION["user"]["id"];
                        }
                    hd_insert($date, $id_kh);
                    $id_hd = show_id();
                    foreach ($_SESSION["shopping_cart"] as $item) {
                        hdct_sp_insert($id_hd, $item["id"], $item["so_luong"], $item["don_gia"]);
                    }
                    unset($_SESSION["shopping_cart"]);
                    header("Location:index.php?lenh=thanhcong");
                    break; 
                }
                
                
            case 'admin':
                header("location: ../index.php?mod=admin")       ;
                break;
            case 'cart':
                if(isset($cap_nhat)){
                    if(isset($cart)){
                        for ($i=0; $i < $so_luong_sp ; $i++) { 
                            $_SESSION["shopping_cart"][$i]["so_luong"] = $_POST['so_luong_sp'.$i.''];
                        }
                    }else{
                        for ($i=0; $i < $so_luong_sp ; $i++) { 
                            $_SESSION["like_sp"][$i]["so_luong"] = $_POST['so_luong_sp'.$i.''];
                        }
                    }
                    
                }
                $list =  isset($_GET["cart"])? $_SESSION["shopping_cart"]?? null :$_SESSION["like_sp"] ?? null;
                $title = isset($_GET["cart"])? "shopping cart" :" list product like";
                $for = isset($_GET["cart"])? "cart" :"like";
                include "views/cart.php";        
                break;
          
            case 'blog':
                if(isset($id)){
                    $list_blog = blog_select_all(4);
                    $blog_item = blog_select_by_id($id);
                    include "views/blog-details.php"; 
                }else{
                    $list_blog = blog_select_all(6);
                    include "views/blog.php";  
                }
                break;
            case 'blog-details':
                include "views/blog-details.php";
                break;
            case 'user':
                $user = $_SESSION["user"] ?? null;
                if($user){
                    $user = user_select_by_id($_SESSION["user"]["id"]);
                    include "views/user.php";
                }else{
                    header("Location:index.php?page=login&user_2=1");
                }
                
                break;
            case 'login':
                if(isset($dang_nhap)){
                    $user = user_check($ten_dang_nhap, $mat_khau);
                    var_dump( $user);
                    if($user){
                        // session_set_cookie_params(60);
                    
                            $id = $user[0]["id"];
                            $ho_ten = $user[0]["ho_ten"];
                            $user = [
                                "id" => $id,
                                "ho_ten" => $ho_ten
                            ];

                        $_SESSION['user'] = $user;

                        header("Location:index.php?user_2=1");
                        exit();
                    }else{
                        echo '<div class="container mt-5">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Thông báo!</strong> Tài khoản và mật khẩu không đúng.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>';
                    }
                }
                include "views/login.php";
                break;
            case 'register':
                if(isset($dang_ky)){
                    if($mat_khau == $nhap_lai_mat_khau){
                        $register = user_check($ten_dang_nhap);
                        if($register){
                            // echo'<pre>';
                            // var_dump( $register);
                            echo '<div class="container mt-5">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Thông báo!</strong> Tài khoản đã tồn tại.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>';
                        }else{
                            user_insert($ten_dang_nhap, $email, $mat_khau);
                            header("Location:index.php?register=1");
                            exit();
                        }
                        
                    }else{
                        echo'Mật khẩu không khớp';
                    }
                   
                }
                include "views/register.php";
                break;
            default:
                $banners = dm_select_choose();
                $title = dm_select_all();
                $list_product_all = sp_select_all(8);
                $list_sale = sp_select_sale();
                $list_view = sp_select_view();
                $list_hot = sp_select_bestseller();
        
                $numbel = count($list_hot);
                $more = 3 - $numbel;
                $more = sp_select_all($more);

                include "views/home.php";
                break;
        }
    }else{
        $banners = dm_select_choose();
        $title = dm_select_all();
        $list_product_all = sp_select_all(8);
        $list_sale = sp_select_sale();
        $list_view = sp_select_view();
        $list_hot = sp_select_bestseller();

        $numbel = count($list_hot);
        $more = 3 - $numbel;
        $more = sp_select_all($more);

        include "views/home.php";
    }
    $panpage = panpage_select_all();
    ob_end_flush();
    include "views/footer.php";
    
?>