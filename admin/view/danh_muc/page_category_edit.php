
<div class="p-3 vh-100">
<form method="post" action="" enctype="multipart/form-data" class="form p-3 ">

             <div class="row">
                 <div class="col-md-6">
                          <div>
                                  <label for="">Tên danh mục</label>
                                  <input type="text" name="ten_dm" class="form-control" value="<?php echo $dm['ten_dm']; ?>">
                              </div>  
                              <div>
                                  <label for="">Gi Chú</label>
                                  <textarea  class="form-control" name="" id="" cols="30" rows="5"  style="color:black"><?php echo $dm['ghi_chu']; ?></textarea>
                              </div>
                              <div>
                                  <label for="">Link ( Tên danh mục: cây đá -> "cay_da" )</label>
                                  <input type="text" name="link" class="form-control" value="<?php echo $dm['link']; ?>">
                              </div>
                              <div>
                                  <label for="">Trạng thái</label>
                                  <select class="form-select" name="trang_thai" id="">
                                       <option value="đang hoạt động" style="color:black" <?php if($dm['trang_thai']=="Đang hoạt động") echo 'selected'; ?>>Đang hoạt động</option>
                                       <option value="tạm ngưng" style="color:black" <?php if($dm['trang_thai']=="tạm ngưng") echo 'selected'; ?>>Tạm ngưng</option>';
                                       <option value="show lên banner" style="color:black" <?php if($dm['trang_thai']=="show home") echo 'selected'; ?>>show lên banner</option>';
                                  </select>
                              </div>
                              <div>
                                <label for="">Hình ảnh (chọn nếu muốn đổi hình)</label>
                                <input type="file" name="hinh_moi" class="form-control">
                            </div>
                              <div class="text-center">
                                  <input type="hidden" name="ghi_chu" id="" value="<?php echo $dm['ghi_chu']; ?>"> 
                                  <input type="hidden" name="hinh_cu" id="" value="<?php echo $dm['hinh']; ?>"> 
                                  <input type="hidden" name="id" id="" value="<?php echo $dm['id']; ?>'">  
                                  <input class="btn btn-danger m-5" type="submit" name="editCategory_submit" value="Lưu ">
                              </div>
                               
                  </div>
                  <div class="col-md-6 " style="margin-top: 11px;">
                  <img class="my-3" src="../content/frontend/img/categories/<?php echo $dm['hinh']; ?>" width="600" height="380" alt="" >
                  </div>
              </div>  
    </form>
</div>