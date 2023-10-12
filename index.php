<?php
    extract($_REQUEST);
    if(isset($mod)){
    header('location: admin/index.php');
    
    }else
    header('location: site/index.php');
    

?>