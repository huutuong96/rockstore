<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 2;">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h3 class="fw-bold mb-4">Rock Store</h3>
            
            <form action="" method="post" >
                <!-- ten dang nhap input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example4" class="form-control" name="ten_dang_nhap" />
                <label class="form-label" for="form3Example4">Tên Đăng Nhập</label>
              </div>

                <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" name="email" />
                <label class="form-label" for="form3Example3">Email</label>
              </div>

              <!-- mat khẩu input -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="password" id="form3Example1" class="form-control" name="mat_khau" />
                    <label class="form-label" for="form3Example1">Mật Khẩu</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="password" id="form3Example2" class="form-control" name="nhap_lai_mat_khau" />
                    <label class="form-label" for="form3Example2">Nhập Lại Mật Khẩu</label>
                  </div>
                </div>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" name="dang_ky">
                Đăng ký
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 1;">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->