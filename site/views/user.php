<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?= "../content/frontend/img/user/".$user["hinh"]?>"><span class="font-weight-bold"><?= $user["ten_dang_nhap"] ?></span><span class="text-black-50"><?= $user["email"] ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Quản lý user</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Tên Đăng Nhập</label><input type="text" class="form-control" value="<?= $user["ten_dang_nhap"] ?>"></div>
                    <div class="col-md-12"><label class="labels">Họ Và Tên</label><input type="text" class="form-control" value="<?= $user["ho_ten"] ?>"></div>
                    <div class="col-md-12"><label class="labels">email</label><input type="text" class="form-control" value="<?= $user["email"] ?>"></div>
                    <div class="col-md-12"><label class="labels">Địa Chỉ</label><input type="text" class="form-control" value="<?= $user["dia_chi"] ?>"></div>
                    <div class="col-md-12"><label class="labels">Số Điện Thoại</label><input type="text" class="form-control" value="<?= $user["sdt"] ?>"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Lưu</button></div>
            </div>
        </div>
        <?php
            if($user["chuc_vu"] == 1){
                echo ' <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="col-md-12"><a href="?page=admin">Chuyển qua trang quản lý admin</a></div> <br>
                        </div>
                    </div>';
            }
        ?>
    </div>
</div>
</div>
</div>