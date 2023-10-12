<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý sản phẩm</h3>
    <div >
        <a class="btn btn-primary" href="?mod=product&act=add">Thêm sản phẩm</a>
    </div>
    
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>id</th>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($ds_sp as $sp){
                    echo'<tr>
                            <th style="width:3%;">'.$sp["id"].'</th>
                            <td><img src="../content/frontend/img/product/'.$sp["hinh"].'" height="100px" width="100px" alt=""></td>
                            <th style="width:10%;">'.$sp["ten_sp"].'</th>
                            <th>'.number_format($sp["don_gia"]).' VND</th>
                            <th style="width:50%;">'.$sp["mo_ta"].'</th>
                            <td style="width:13%;">
                                <a class="btn btn-primary" href="?mod=product&act=show&id='.$sp["id"].'"  style="margin-bottom: 10px;">xem chi tiết</a>
                                <a class="btn btn-primary" href="?mod=product&act=edit&id='.$sp["id"].'">Sửa</a>
                                <a class="btn btn-danger" href="?mod=product&act=delete&id='.$sp["id"].'&hinh='.$sp["hinh"].'">Xóa</a>
                            </td>
                        </tr>';
                }
            ?>
            
        </tbody>
    </table>
    <div>
    <?php           
               echo '<div class="col-lg-12 text-center">
                    <div class="pagination__option">';
                    
                    for($i=1; $i <= $page_number; $i++){
                        $j = $i - 1;                                     
                        echo'<a href="?mod=product&act=list&number='.$j.'" style="text-decoration: none;padding:10px;color:#ffff;border-radius: 38%;';
                       
                        if(!isset($number)){
                            if($i == 1 || $nuber == 1){
                                echo'background-color: #1b2a2a;';
                            }
                        }else{
                            if($number == $j){
                                echo'background-color: #1b2a2a;';
                            }
                        }
                        
                        echo'">  '.$i.'  </a>';
                    };
                    $max = $i - 2;
                    $number = isset($number)? ++$number : 1;
                    if($number > $page_number -1 ){
                        echo'
                        <a href="?mod=product&act=list&number='.$max.'"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>'; 
                    }else{
                        echo'
                        <a href="?mod=product&act=list&number='.$number++.'" style="text-decoration: none;padding:10px;color:#ffff"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>'; 
                    }
    ?>
    </div>
</div>