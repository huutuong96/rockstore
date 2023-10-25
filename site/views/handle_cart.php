

<?php
    session_start();
    ob_start();
    include "../../model_DAO/products.php";
    include "../../model_DAO/pdo.php";

    //thêm sp vào giỏ hàng
    if(isset($_POST["id"])){
        $id = $_POST["id"];
        $ten_sp = $_POST["ten_sp"];
        $hinh = $_POST["hinh"];
        $so_luong = $_POST["so_luong"];
        $don_gia = $_POST["don_gia"];
        $san_pham = [
            "id" =>  $id,
            "ten_sp" => $ten_sp,
            "hinh" => $hinh,
            "so_luong" => $so_luong,
            "don_gia" => $don_gia
        ];
    
        if(isset($_SESSION["shopping_cart"])){
            $key = -1;
            foreach ($_SESSION["shopping_cart"] as $index => $item) {
                if ($item["id"] == $id) {
                    $key = $index;
                    break;
                }
            }
    
            if($key !== -1){
                $_SESSION['shopping_cart'][$key]['so_luong'] += $so_luong;
            }else{
                $_SESSION['shopping_cart'][] = $san_pham;
            }
        }else{
            $_SESSION['shopping_cart'] = array($san_pham);
        }
    
        if(isset($_POST["comback"])){
            header("Location: ../index.php?thanh_cong=l");
            exit();
        }else{
            header("Location: ../index.php?page=product-details&id=$id&thanh_cong=l");
            exit();
        };
    }
         // xóa sp trong gio hang
    if (isset($_GET['vi_tri'])) {
        array_splice($_SESSION['shopping_cart'],$_GET['vi_tri'],1);
        header("Location: ../index.php?page=cart");
        exit();
    }
//thêm sp vào danh sach yêu thích
    if(isset($_GET["id"])){
        $sp = sp_select_by_id($_GET["id"]);
        $id = $sp["id"];
        $ten_sp = $sp["ten_sp"];
        $hinh = $sp["hinh"];
        $so_luong = $sp["so_luong"];
        $don_gia = $sp["don_gia"];
        $san_pham = [
            "id" =>  $id,
            "ten_sp" => $ten_sp,
            "hinh" => $hinh,
            "so_luong" => 1,
            "don_gia" => $don_gia
        ];
    
        if(isset($_SESSION["like_sp"])){
            $key = -1;
            foreach ($_SESSION["like_sp"] as $index => $item) {
                if ($item["id"] == $id) {
                    $key = $index;
                    break;
                }
            }
    
            if($key !== -1){
                $_SESSION['like_sp'][$key]['so_luong'] += $so_luong;
            }else{
                $_SESSION['like_sp'][] = $san_pham;
            }
        }else{
            $_SESSION['like_sp'] = array($san_pham);
        }
    
        if(isset($_GET["comback"])){
            header("Location: ../index.php?thanh_cong=2");
            exit();
        }else{
            header("Location: ../index.php?page=product-details&id=$id&thanh_cong=2");
            exit();
        };
    }

    
?>