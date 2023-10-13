<?php
    // function dm_insert($ten_dm, $hinh, $ghi_chu, $link, $trang_thai){
    //     var_dump($ten_dm, $hinh, $ghi_chu, $link, $trang_thai);
    //     $sql = "INSERT INTO blog(ten_dm, hinh, ghi_chu, link, trang_thai) VALUES(?,?,?,?,?)";
    //     pdo_execute($sql, $ten_dm, $hinh, $ghi_chu, $link, $trang_thai);
    // }
    
    // function dm_update($id, $ten_dm, $hinh, $ghi_chu, $link, $trang_thai){
    //     $sql = "UPDATE blog SET ten_dm =?, hinh =?, ghi_chu =?, link =?, trang_thai =? WHERE id=?";
    //     pdo_execute($sql, $ten_dm, $hinh, $ghi_chu, $link, $trang_thai, $id);
    // }
    // function dm_delete($id){
    //     $sql = "DELETE FROM blog WHERE id=?";
    //     if(is_array($id)){
    //         foreach ($id as $ma) {
    //             pdo_execute($sql, $ma);
    //         }
    //     }
    //     else{
    //         pdo_execute($sql, $id);
    //     }
    // }
    
    function blog_select_all($limit = null,$offset = null){
        $sql = "SELECT * FROM blog";
        $sql.=" WHERE trang_thai != 'tạm ngưng'";
        if(!$limit == null){
            if(!$offset == null){
                $sql.=' limit '.$limit." OFFSET ". $offset;
            }else{
                $sql.=' limit '.$limit;
            }
            
        }
        
        return pdo_query($sql);
    }

    function blog_select_by_id($id){
        $sql = "SELECT * FROM blog WHERE id=?";
        return pdo_query_one($sql, $id);
    }

    // function dm_select_all_admin($limit = null,$offset = null){
    //     $sql = "SELECT * FROM blog";
    //     if(!$limit == null){
    //         if(!$offset == null){
    //             $sql.=' limit '.$limit." OFFSET ". $offset;
    //         }else{
    //             $sql.=' limit '.$limit;
    //         }
            
    //     }
        
    //     return pdo_query($sql);
    // }
    // function dm_select_choose($limit = null){
    //     $sql = "SELECT * FROM blog WHERE trang_thai = 'show lên banner'";
    //     if(!$limit == null){
    //         $sql.=' limit '.$limit;
    // }
    //     return pdo_query($sql);
    // }
    // function dm_select_by_id($id){
    //     $sql = "SELECT * FROM blog WHERE id=?";
    //     return pdo_query_one($sql, $id);
    // }
    // function dm_exist($id = null){
    //     if($id !== null){
    //         $sql = "SELECT count(*) FROM blog WHERE id=?";
    //         return pdo_query_value($sql, $id) > 0;
    //     }else{
    //         $sql = "SELECT count(*) FROM blog";
    //         return pdo_query($sql);
    //     }
        
    // }
    
?>