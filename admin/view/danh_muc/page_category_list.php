<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý danh mục</h3>
    <div >
        <a class="btn btn-primary" href="?mod=category&act=add">Thêm danh mục</a>
    </div>
    
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($ds_dm as $dm){
                    echo '<tr>
                            <td>'.$dm["id"].'</td>
                            <td>'.$dm["ten_dm"].'</td>
                            <td><img src="../content/frontend/img/categories/'.$dm["hinh"].'" height="100px" width="100px" alt=""></td>
                            <td>'.$dm["trang_thai"].'</td>
                            <td>
                                <a class="btn btn-primary" href="?mod=category&act=edit&id='.$dm["id"].'">Sửa</a>
                                <a class="btn btn-danger" href="?mod=category&act=delete&id='.$dm["id"].'">Xóa</a>
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
                        echo'<a href="?mod=category&act=list&number='.$j.'" style="text-decoration: none;padding:10px;color:#ffff">  '.$i.'  </a>';
                    };
                    $max = $i -2;
                    $number = isset($number)? ++$number : 1;
                    if($number > $page_number -1){
                        $number-=1;
                        echo'
                        <a href="?mod=category&act=list&number='.$max.'"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>'; 
                    }else{
                        echo'
                        <a href="?mod=category&act=list&number='.$number++.'"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>'; 
                    }
    ?>
    </div>
</div>