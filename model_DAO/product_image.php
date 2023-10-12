<?php
    function  img_insert($hinh, $hinh1, $hinh2, $hinh3 ){
        $sql = "INSERT INTO anh_san_pham(hinh, hinh_1, hinh_2, hinh_3) VALUES(?,?,?,?)";
        pdo_execute($sql, $hinh, $hinh1, $hinh2, $hinh3);
    }
    
    function  img_update($id, $hinh, $hinh1, $hinh2, $hinh3 ){
        $sql = "UPDATE anh_san_pham SET hinh=?, hinh1=?, hinh2=?, hinh3=?WHERE id=?";
        pdo_execute($sql, $hinh, $hinh1, $hinh2, $hinh3, $id);
    }
    function  img_delete($id){
        $sql = "DELETE FROM anh_san_pham WHERE id=?";
        if(is_array($id)){
            foreach ($id as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }
    function  img_select_all(){
        $sql = "SELECT * FROM anh_san_pham ";
        return pdo_query($sql);
    }

    function  img_select_by_id($id){
        $sql = "SELECT * FROM anh_san_pham WHERE id=?";
        return pdo_query_one($sql, $id);
    }
    function  img_select_by_new(){
        $sql = "SELECT * FROM anh_san_pham ORDER BY id DESC limit 1";
        return pdo_query_one($sql);
    }
    function  img_exist($id){
        $sql = "SELECT count(*) FROM anh_san_pham WHERE id=?";
        return pdo_query_value($sql, $id) > 0;
    }
    
?>