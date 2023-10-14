
<?php
    function hd_select_all($limit = null,$offset = null){
        $sql = "SELECT dh.id, dh.ngay_xuat, kh.ho_ten, dhct.id_sp, dhct.so_luong, dhct.gia FROM don_hang as dh
                INNER JOIN chi_tiet_hd as dhct  ON dh.id = dhct.id_dh
                INNER JOIN khach_hang as kh  ON dh.id_kh = kh.id
                GROUP by dh.id, dhct.id_sp";
        if(!$limit == null){
            if(!$offset == null){
                $sql.=' limit '.$limit." OFFSET ". $offset;
            }else{
                $sql.=' limit '.$limit;
            }
            
        }
        
        return pdo_query($sql);
    }
    function hd_insert($date, $id_kh){
        $sql = "INSERT INTO don_hang( id_kh, ngay_xuat, trang_thai) VALUES(?,?,?)";
        pdo_execute($sql, $id_kh, $date, 1 );
    }
    function hdct_sp_insert($id_dh, $id_sp, $so_luong, $gia){
        $sql = "INSERT INTO chi_tiet_hd( id_dh, id_sp, so_luong, gia) VALUES(?,?,?,?)";
        pdo_execute($sql, $id_dh, $id_sp, $so_luong, $gia );
    }
    function show_id(){
        $sql = "SELECT id FROM don_hang 
        order by ID DESC limit 1";
        return pdo_query_value($sql);
    }
?>