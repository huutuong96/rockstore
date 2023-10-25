<?php
    include_once "pdo.php";

    function show_msg($id_sp){
        $sql='SELECT binh_luan.*, khach_hang.ten_dang_nhap, khach_hang.hinh FROM binh_luan
        join khach_hang on khach_hang.id = binh_luan.id_kh
              WHERE id_sp = ?
              order by ngay_bl ASC
              limit 3';
        return pdo_query($sql, $id_sp);
    }
?>