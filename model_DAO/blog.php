<?php  
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
    function blog_exist(){
        $sql = "SELECT count(*) FROM blog";
        return pdo_query($sql);
    }
?>