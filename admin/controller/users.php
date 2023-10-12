<?php
    if(isset($act)){
        include "view/header.php";
        switch($act){
            case "list":
                $user_list = user_select_all();
                include "view/users/page_user_list.php";
                
                break;
            case "add":
    
                include "view/users/page_user_add.php";
                break;
             case "delete":
                     dm_delete($id);
                     header("location: index.php?mod=user&act=list");
                 break;
            case "edit":
                
                include "view/users/page_user_edit.php";
                break;
        }
        include "view/footer.php";
    }
?>