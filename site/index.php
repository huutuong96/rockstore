<?php
    extract($_REQUEST);
    if(isset($mod)){
        switch($mod){
            case 'page':
                include_once "controller/page.php";
                break;
        }
    }else{
        include_once "controller/page.php";
    }
?>