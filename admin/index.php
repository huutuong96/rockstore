<?php
    extract($_REQUEST);
    session_start();

    include "../model_DAO/categorys.php";
    include "../model_DAO/products.php";
    include "../model_DAO/pdo.php";
    include "../model_DAO/materials.php";
    include "../model_DAO/public.php";
    include "../model_DAO/users.php";
    include "../model_DAO/blog.php";
    include "../model_DAO/bil.php";
    include "../model_DAO/product_image.php";

    if(isset($_SESSION["user"]) ){
        $user_admin = user_select_by_id($_SESSION["user"]["id"]);
        if($user_admin["chuc_vu"] !== 1){
            header('location: ../index.php');
        }
    }else{
        header('location: ../index.php');
    }

        $mod = isset($_GET['mod'])? $_GET['mod'] : "default";

        switch($mod){
            case 'category':
                include "controller/category.php";
                break;
            case 'product':
                include "controller/product.php";
                break; 
            case 'statistic':
                include "controller/statistic.php";
                break;
            case 'user':
                include "controller/users.php";
                break;
            default:
                include "controller/home.php";
                break;
        };
    
?>
