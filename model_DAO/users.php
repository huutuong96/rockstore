<?php
    function user_insert( $ten_dang_nhap, $email, $mat_khau){
        $sql = "INSERT INTO khach_hang( ten_dang_nhap, mat_khau, email) VALUES(?,?,?)";
        pdo_execute($sql, $ten_dang_nhap, $mat_khau, $email);
    }
    
    function user_update($id, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $chuc_vu, $dia_chi, $sdt, $trang_thai, $hinh){
        $sql = "UPDATE khach_hang SET  ho_ten=?, $ten_dang_nhap, $mat_khau, $email, $chuc_vu, $dia_chi, $sdt, $trang_thai, $hinh WHERE id=?";
        pdo_execute($sql, $id, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $chuc_vu, $dia_chi, $sdt, $trang_thai, $hinh);
    }
    function user_delete($id){
        $sql = "DELETE FROM khach_hang WHERE id=?";
        if(is_array($id)){
            foreach ($id as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }
    function user_select_all(){
        $sql = "SELECT * FROM khach_hang";
        return pdo_query($sql);
    }
    function user_select_by_id($id){
        $sql = "SELECT * FROM khach_hang WHERE id=?";
        return pdo_query_one($sql, $id);
    }
    function user_exist($id = null){
        if($id !== null){
            $sql = "SELECT count(*) FROM khach_hang WHERE id=?";
            return pdo_query_value($sql, $id) > 0;
        }else{
            $sql = "SELECT count(*) FROM khach_hang";
            return pdo_query($sql);
        }
        
    }

    function user_check($user, $password = null){
        if($password !== null){
            $sql = "SELECT * FROM khach_hang WHERE ten_dang_nhap like '%$user%' and mat_khau like '%$password%'";
            return pdo_query($sql);
        }else{
            $sql = "SELECT * FROM khach_hang WHERE ten_dang_nhap like '%$user%'";
            return pdo_query($sql);
        };
    }
    
?>