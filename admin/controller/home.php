<?php
    $all_user = user_exist();
    $all_category = dm_exist();
    $all_product = sp_exist();
    $all_blog = blog_exist();

    include "view/header.php";
    include "view/home/home.php";
    include "view/footer.php";
?>