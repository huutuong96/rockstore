<?php
    function panpage_select_all($limit = null){
        $sql = "SELECT * FROM panpage";
        if(!$limit == null){
            $sql.=' limit '.$limit;
        }
        return pdo_query($sql);
    }
?>