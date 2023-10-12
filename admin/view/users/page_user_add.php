<div class="p-3 vh-100">
    <form method="post" action="" enctype="multipart/form-data" class="form p-3">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Danh muc</label>
                    <select class="form-select" name="id_dm" id="" >
                        <?php
                            foreach($dm as $item){
                                echo'<option value="'.$item["id"].'" style="color:black">'.$item["ten_dm"].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="ten_sp" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image[]" class="form-control" multiple>
                </div>  
                <div>
                    <label for="">Mô tả</label>
                    <input type="text" name="mo_ta" class="form-control">
                </div>
                <div>
                    <label for="">Đơn giá</label>
                    <input type="text" name="don_gia" class="form-control">
                </div>
                <div>
                    <label for="">Giảm giá (%)</label>
                    <input type="text" name="giam_gia" class="form-control">
                </div>
                <div>
                    <label for="">Chất liệu</label>
                    <select class="form-select" name="chat_lieu" id="" >
                        <?php
                            foreach($cl as $item){
                                echo'<option value="'.$item["id"].'" style="color:black">'.$item["ten_da"].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="addProduct_submit" value="Thêm">
                </div>
            </div>
        </div>
    </form>
</div>