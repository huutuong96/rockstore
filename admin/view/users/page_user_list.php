<div class="p-5 vh-100">
    <h3 class="text-center">Quản lý user</h3>
    <div >
        <a class="btn btn-primary" href="?mod=product&act=add">Thêm sản phẩm</a>
    </div>
    
    <table class="table table-hover ">
        <thead>
            <tr>
                <th>id</th>
                <th>Hình ảnh</th>
                <th>Tên đăng nhập</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>SDT</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($user_list as $user){
                    echo'<tr>
                            <th style="width:3%;">'.$user["id"].'</th>
                            <th><img src="../content/frontend/img/user/'.$user["hinh"].'" height="100px" width="100px" alt=""></th>
                            <th style="width:10%;">'.$user["ten_dang_nhap"].'</th>
                            <th style="width:20%;">'.$user["ho_ten"].'</th>
                            <th>'.$user["email"].'</th>
                            <th>'.$user["dia_chi"].'</th>
                            <th style="width:15%;">'.$user["sdt"].' VND</th>
                            <td style="width:13%;">
                                <a class="btn btn-primary" href="?mod=product&act=show&id='.$user["id"].'"  style="margin-bottom: 10px;">xem chi tiết</a>
                                <a class="btn btn-primary" href="?mod=product&act=edit&id='.$user["id"].'">Sửa</a>
                                <a class="btn btn-danger" href="?mod=product&act=delete&id='.$user["id"].'&hinh='.$user["hinh"].'">Xóa</a>
                            </td>
                        </tr>';
                }
            ?>
            
        </tbody>
    </table>
</div>