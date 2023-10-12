<?php
    function  cl_insert($ten_da ){
        $sql = "INSERT INTO loai_da(ten_da) VALUES(?)";
        pdo_execute($sql, $ten_da);
    }
    
    function  cl_update($id, $ten_da ){
        $sql = "UPDATE loai_da SET ten_da=?WHERE id=?";
        pdo_execute($sql, $ten_da , $id);
    }
    function  cl_delete($id){
        $sql = "DELETE FROM loai_da WHERE id=?";
        if(is_array($id)){
            foreach ($id as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }
    function  cl_select_all(){
        $sql = "SELECT * FROM loai_da ";
        return pdo_query($sql);
    }
    function  cl_select_choose(){
        $sql = "SELECT * FROM loai_da WHERE sethome = '1'";
        return pdo_query($sql);
    }
    function  cl_select_by_id($id){
        $sql = "SELECT * FROM loai_da WHERE id=?";
        return pdo_query_one($sql, $id);
    }
    function  cl_exist($id){
        $sql = "SELECT count(*) FROM loai_da WHERE id=?";
        return pdo_query_value($sql, $id) > 0;
    }
    
?>