<div class="p-3 vh-100">
    <form method="post" action="" enctype="multipart/form-data" class="form p-3">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên danh mục</label>
                    <input type="text" name="ten_dm" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                </div>  
                <div>
                    <label for="">Gi Chú</label>
                    <input type="text" name="ghi_chu" class="form-control">
                </div>
                <div>
                    <label for="">Link ( Tên danh mục vd "cay_da" )</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <div>
                    <label for="">Trạng thái</label>
                    <select class="form-select" name="trang_thai" id="">
                        <option value="2" style="color:black">Đang hoạt động</option>
                        <option value="0" style="color:black">Tạm ngưng</option>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="addCategory_submit" value="Thêm">
                </div>
            <div class="col-md-6 ">
            </div>
        </div>
        
    </form>
</div>