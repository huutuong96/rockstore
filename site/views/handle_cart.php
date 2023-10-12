

<?php
    session_start();
    ob_start();
    session_set_cookie_params(60);
    
    
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
    
    // Xóa sản phẩm khỏi giỏ hàng
    // if(isset($_GET["id"])){
    //     $id =  $_GET["id"];
    
    //     if(isset($_SESSION["shopping_cart"])){
    //         $key = -1;
    //         foreach ($_SESSION["shopping_cart"] as $index => $item) {
    //             if ($item["id"] == $id) {
    //                 $key = $index;
    //                 break;
    //             }
    //         }
    
    //         if($key !== -1){
    //             unset($_SESSION['shopping_cart'][$key]);
    //         }
    //     }
    
    //     header("Location: ../index.php?page=cart");
    //     exit();
    // }
       
        if (isset($_GET['vi_tri'])) {
            array_splice($_SESSION['shopping_cart'],$_GET['vi_tri'],1);
        }

        header("Location: ../index.php?page=cart");
        exit();

    
?>