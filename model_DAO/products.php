<?php
    function sp_insert($id_dm, $ten_sp, $don_gia, $giam_gia, $hinh, $mo_ta, $chat_lieu){
        $sql = "INSERT INTO san_pham(id_dm, ten_sp, don_gia, giam_gia, hinh, so_luot_xem, mo_ta, sao_danh_gia, chat_lieu) VALUES(?,?,?,?,?,?,?,?,?)";
        pdo_execute($sql, $id_dm, $ten_sp, $don_gia, $giam_gia, $hinh, "0", $mo_ta, "5", $chat_lieu);
    }
    
    function sp_update($id, $id_dm, $ten_sp, $don_gia, $giam_gia, $hinh, $mo_ta, $chat_lieu){
        $sql = "UPDATE san_pham SET id_dm=?, ten_sp=?, don_gia=?, giam_gia=?, hinh=?, so_luot_xem=?, mo_ta=?, sao_danh_gia=?, chat_lieu=? WHERE id=?";
        pdo_execute($sql, $id_dm, $ten_sp, $don_gia, $giam_gia, $hinh, 0, $mo_ta, 5, $chat_lieu, $id);
    }

    function sp_delete($id){
        $sql = "DELETE FROM san_pham WHERE id=?";
        if(is_array($id)){
            foreach ($id as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $id);
        }
    }

    function sp_select_all($limit = null,$offset = null, $where = null){
        $sql = "SELECT san_pham.*, anh_san_pham.hinh, anh_san_pham.hinh_1, anh_san_pham.hinh_2, anh_san_pham.hinh_3, danh_muc.link  FROM san_pham
        INNER JOIN danh_muc ON san_pham.id_dm = danh_muc.id
        INNER JOIN anh_san_pham ON san_pham.hinh = anh_san_pham.id";
        if(!empty($where)){
            if(is_array($where)){
                $sql .=' WHERE  san_pham.chat_lieu = "'.$where[0].'" and san_pham.id_dm = "'.$where[1].'"';
            }else{
                $sql .=' WHERE san_pham.id_dm = "'.$where.'"';
            }
            
        }
        if(!$limit == null){
            if(!$offset == null){
                $sql.=' limit '.$limit." OFFSET ". $offset;
            }else{
                $sql.=' limit '.$limit;
            }
            
        }
        return pdo_query($sql);
    }

    function sp_select_sale(){
        $sql = "SELECT san_pham.*, anh_san_pham.hinh FROM san_pham
                INNER JOIN anh_san_pham ON san_pham.hinh = anh_san_pham.id
                order by giam_gia DESC limit 3";
        return pdo_query($sql);
    }

    function sp_select_view(){
        $sql = "SELECT * FROM san_pham
                INNER JOIN anh_san_pham ON san_pham.hinh = anh_san_pham.id
                order by so_luot_xem DESC limit 3";
        return pdo_query($sql);
    }

    function sp_select_bestseller(){
        $sql = "SELECT san_pham.*,anh_san_pham.hinh, SUM(chi_tiet_hd.so_luong) as soluotmua FROM san_pham
                INNER JOIN chi_tiet_hd  ON san_pham.id = chi_tiet_hd.id_sp
                INNER JOIN anh_san_pham ON san_pham.hinh = anh_san_pham.id
                GROUP BY san_pham.id
                order by soluotmua DESC limit 3";
        return pdo_query($sql);
    }

    
    function sp_select_by_id($id){
        $sql = "SELECT san_pham.*, anh_san_pham.hinh, anh_san_pham.hinh_1, anh_san_pham.hinh_2, anh_san_pham.hinh_3, danh_muc.ten_dm,  anh_san_pham.id as id_hinh FROM san_pham 
                INNER JOIN anh_san_pham ON san_pham.hinh = anh_san_pham.id
                INNER JOIN danh_muc ON san_pham.id_dm = danh_muc.id
                WHERE san_pham.id=?";
        return pdo_query_one($sql, $id);
    }
    
    function sp_exist_by_ten_dm($ten_dm){
        $sql = "SELECT san_pham.id as id_sp FROM san_pham
        INNER JOIN danh_muc ON san_pham.id_dm = danh_muc.id
        WHERE ten_dm=?";
        return pdo_query($sql, $ten_dm);
    }
    function sp_exist_by_ten_dm_tong_tien($id_sp) {
        $sql = "SELECT ( chi_tiet_hd.gia * chi_tiet_hd.so_luong ) as tong
                FROM chi_tiet_hd
                INNER JOIN san_pham  ON san_pham.id = chi_tiet_hd.id_sp
                WHERE chi_tiet_hd.id_sp = ?
                GROUP BY chi_tiet_hd.id_sp";
        
        // Sử dụng pdo_query để thực hiện truy vấn và trả về kết quả dưới dạng mảng
        return pdo_query_one($sql, $id_sp);
    }
  
    function sp_exist(){
        $sql = "SELECT count(*) FROM san_pham";
        return pdo_query($sql);
    }
    
    function search($data){
        $sql = "SELECT san_pham.*, anh_san_pham.hinh, anh_san_pham.hinh_1, anh_san_pham.hinh_2, anh_san_pham.hinh_3 FROM san_pham
        INNER JOIN anh_san_pham ON san_pham.hinh = anh_san_pham.id
        WHERE ten_sp like ?";
        $data = "%".$data."%";
        return pdo_query($sql, $data);
    }
?>