<?php
    if(isset($act)){
        include "view/header.php";
        switch($act){
            case "list":
                $ds_dm = dm_select_all_admin(4, ( isset($_GET["number"]) ? $_GET["number"]*4: null));
                
                $dm_number = count(dm_select_all_admin());
                    $page_number = $dm_number / 4;
                    if($dm_number % 4 !== 0){
                        $page_number += 1;
                    }
                include "view/danh_muc/page_category_list.php";
                
                break;
            case "add":
                if(isset($addCategory_submit)){
                    dm_insert($ten_dm, $_FILES["image"]["name"], $ghi_chu, $link, $trang_thai);
                    move_uploaded_file($_FILES["image"]["tmp_name"],'../content/frontend/img/categories/'.$_FILES["image"]["name"]);
                    header("location: index.php?mod=category&act=list");
                }
                include "view/danh_muc/page_category_add.php";
                break;
             case "delete":
                     dm_delete($id);
                     header("location: index.php?mod=category&act=list");
                 break;
            case "edit":
                $dm = dm_select_by_id($id);
                if(isset($editCategory_submit)){
                    if($_FILES["hinh_moi"]["error"] == UPLOAD_ERR_OK){
                        dm_update($id, $ten_dm, $_FILES["hinh_moi"]["name"], $ghi_chu, $link, $trang_thai);
                        move_uploaded_file($_FILES["hinh_moi"]["tmp_name"],'../content/frontend/img/categories/'.$_FILES["hinh_moi"]["name"]);
                    }else{
                        dm_update($id, $ten_dm, $hinh_cu, $ghi_chu, $link, $trang_thai);
                    }
                    header("location: index.php?mod=category&act=list");
                }
                
                include "view/danh_muc/page_category_edit.php";
                break;
        }
        include "view/footer.php";
    }
?>