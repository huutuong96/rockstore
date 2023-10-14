<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Bạn có phiếu giảm giá không?</a> Nhấn vào đây để nhập nhé !!.</h6>
                </div>
            </div>
            <form action="index.php?page=checkout" class="checkout__form" method="post">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Thông tin cần thiết</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Họ và Tên <span>*</span></p>
                                    <input type="text" value="<?= $ho_ten ?? "" ?>">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Địa Chỉ <span>*</span></p>
                                    <input type="text"  value="<?= $dia_chi ?? "" ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" value="<?= $sdt ?? "" ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text" value="<?= $email ?? "" ?>">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__checkbox">
                                    <label for="acc">
                                        Bạn có muốn đăng ký tài khoản?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                    <p>Nếu bạn tạo tài khoản thì thông tin đơn hàng của bạn xẽ được cập nhật và thông báo cho bạn theo ngày</p>
                                    </div>
                                    <div class="checkout__form__input">
                                        <p>Nhập mật khẩu nếu bạn muốn tạo tài khoản <span>*</span></p>
                                        <input type="text">
                                    </div>
                                    <div class="checkout__form__input">
                                        <p>Ghi chú khác <span>*</span></p>
                                        <input type="text"
                                        placeholder="Viết những điều bạn muốn chúng tôi chú ý ở đây !!">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="checkout__order">
                                <h5>Hóa đơn chi tiết</h5>
                                <div class="checkout__order__product">
                                    <ul>
                                        <li>
                                            <span class="top__text">Sản phẩm</span>
                                            <span class="top__text__right">Thành tiền</span>
                                        </li>
                                        
                                        <?php $i = 1; foreach ($_SESSION["shopping_cart"] as $item):?>
                                        <li><?= $i." : ".$item["ten_sp"]?> <span><?= number_format($item["don_gia"])?> VND</span></li>
                                        <?php $i++; endforeach ?>
                                    </ul>
                                </div>
                                <?php
                                    $tong_tien= 0;
                                        foreach ($_SESSION["shopping_cart"] as $item) {
                                            $tong_tien += ($item["don_gia"] * $item["so_luong"]);
                                        }
                                        echo'<div class="checkout__order__total">
                                                <ul>
                                                    <li>Tổng tiền <span>'. number_format($tong_tien) .'  VND</span></li>
                                                    <li>Số tiền phải trả <span>'. number_format($tong_tien) .'  VND</span></li>
                                                </ul>
                                            </div>';
                                ?>
                                <div class="checkout__order__widget">
                                    
                                        <label for="vnpay">
                                            vnpay
                                            <input type="radio" name="pay" value="vnpay" id="vnpay">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="Tien_mat">
                                            Tiền mặt
                                            <input type="radio" name="pay" value="Tien_mat" id="Tien_mat"  checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="momo">
                                            momo
                                            <input type="radio" name="pay" value="momo" id="momo">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="site-btn" name="hoan_tat">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->