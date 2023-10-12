
<div class="p-3 vh-100">
<form method="post" action="?mod=product&act=list" enctype="multipart/form-data" class="form p-3 ">

             <div class="row">
                 <div class="col-md-6">
                        <div>
                            <label for="">Danh muc</label>
                            <select class="form-select" name="id_dm" id="" >
                                <?php
                                    foreach($dm as $item){
                                        echo'<option value="'.$item["id"].'" style="color:black"';
                                        if($sp["id_dm"] == $item["id"]){
                                            echo ' selected ';
                                        }
                                        echo '>'.$item["ten_dm"].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="ten_sp" class="form-control" value="<?php echo $sp['ten_sp']; ?>">
                        </div> 
                        <div>
                            <label for="">Mô tả</label>
                            <textarea  class="form-control" name="" id="" cols="30" rows="5"  style="color:black"><?php echo $sp['mo_ta']; ?></textarea>

                        </div>
                        <div>
                            <label for="">Đơn giá</label>
                            <input type="text" name="" class="form-control"  value="<?php echo number_format($sp['don_gia']) ?> VND">
                        </div>
                        <div>
                            <label for="">Giảm giá (%)</label>
                            <input type="text" name="" class="form-control"  value="<?php echo $sp['giam_gia']; ?> %">
                        </div>
                        <div>
                            <label for="">Chất liệu</label>
                            <select class="form-select" name="chat_lieu" id="" >
                                <?php
                                    foreach($cl as $item){
                                        echo'<option value="'.$item["id"].'" style="color:black"';
                                        if($sp["chat_lieu"] == $item["id"]){
                                            echo ' selected ';
                                        }
                                        echo '>'.$item["ten_da"].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="text-center">
                                  <input type="hidden" name="don_gia" id="" value="<?php echo $sp['don_gia']; ?>"> 
                                  <input type="hidden" name="giam_gia" id="" value="<?php echo $sp['giam_gia']; ?>">
                                  <input type="hidden" name="mo_ta" id="" value="<?php echo $sp['mo_ta']; ?>"> 
                                  <input type="hidden" name="hinh_cu" id="" value="<?php echo $sp['id_hinh']; ?>"> 
                                  <input type="hidden" name="id" id="" value="<?php echo $sp['id']; ?>"> 
                            <input class="btn btn-danger m-5" type="submit" name="editProduct_submit" value="Thoát">
                        </div>
                                    
                  </div>
                  <div class="col-md-6 " style="margin-top: 11px;">
                        <img class="my-3" src="../content/frontend/img/product/<?php echo $sp['hinh']; ?>" style="padding: 10px;" width="250px" height="200px" alt="" >
                        <img class="my-3" src="../content/frontend/img/product/<?php echo $sp['hinh_1']; ?>" style="padding: 10px;" width="250px" height="200px" alt="" >
                        <img class="my-3" src="../content/frontend/img/product/<?php echo $sp['hinh_2']; ?>" style="padding: 10px;" width="250px" height="200px" alt="" >
                        <img class="my-3" src="../content/frontend/img/product/<?php echo $sp['hinh_3']; ?>" style="padding: 10px;" width="250px" height="200px" alt="" >
                  </div>
              </div>  
    </form>
</div>