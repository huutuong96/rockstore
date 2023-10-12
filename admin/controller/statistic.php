<?php
     $arr_thongkesp=[['thong ke sp theo danh muc', 'Hours per Day']];//mảng thống kê số lượng sản phẩm theo danh mục
     $arr_thongkedt=[['Task', 'VND']];//mảng thống kê doanh thu  theo danh mục
     $all_category = dm_select_all();
     foreach ($all_category as $item) {
        $arr_list_id_sp = sp_exist_by_ten_dm($item["ten_dm"]);
         $sum = count($arr_list_id_sp);
         $arr_thongkesp[]=[$item["ten_dm"], $sum];
         $Tong_tien = 0;
         foreach($arr_list_id_sp as $id_sp){//moi danh muc lại có nhiều sản phẩm khác nhau nên dùng for để chạy
            $tong = sp_exist_by_ten_dm_tong_tien($id_sp["id_sp"]);

            if($tong){
            $tong = sp_exist_by_ten_dm_tong_tien($id_sp["id_sp"])["tong"];
            
                $Tong_tien +=  $tong;
                
            }
                 
         };
         $arr_thongkedt[]=[$item["ten_dm"], $Tong_tien];
        
     }
    //   echo"<pre>";
    //      var_dump($arr_thongkedt);
    //      echo"<hr>";
    include "view/header.php";
    include "view/thong_ke/home.php";
    include "view/footer.php";
?>