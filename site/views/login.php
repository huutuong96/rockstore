<?php
    if(isset($_GET["user_2"])){
      echo '<div class="container mt-5">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Thông báo!</strong> Đăng nhập trước khi vào quản lý user.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>';
    }
?>
<!-- <section class=" text-center text-lg-start" style="display: flex;justify-content: center;margin-top: 5%;"> -->
<section style="margin-bottom: 8%">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="../content/frontend/img/user/image-login.webp"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input name="ten_dang_nhap" type="text" id="" class="form-control form-control-lg" />
            <label class="form-label" for="">Tên Đăng Nhập</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="mat_khau" id="" class="form-control form-control-lg" />
            <label class="form-label" for="">Mật Khẩu</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input name="nho_mk" class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Nhớ mật khẩu </label>
            </div>
            <a href="#!">Quên mật ?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="dang_nhap">Đăng Nhập</button>
        </form>
      </div>
    </div>
  </div>
</section>