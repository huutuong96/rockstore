
<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <?php
                foreach ($panpage as $item) {
                    echo '<div class="col-lg-2 col-md-4 col-sm-4 p-0">
                            <div class="instagram__item set-bg" data-setbg="../content/frontend/img/instagram/'.$item["hinh"].'">
                                <div class="instagram__text">
                                    <i class="fa fa-'.$item["ten_mxh"].'"></i>
                                    <a href="#">@ Rock Store</a>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</div>
<!-- Instagram End -->
<?php
    if(isset($_GET["thanh_cong"])){
        echo'<script>
                alert("Thêm giỏ hàng thành công !!!");
            </script>';
    } 
    if(isset($_GET["user"])){
        echo'<script>
                alert("Đăng nhập thành công !!!");
            </script>';
    } 
    if(isset($_GET["register"])){
        echo'<script>
                alert("Đăng ký thành công !!!");
            </script>';
    } 
?>
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="../content/frontend/img/logo-black.png" alt=""></a>
                    </div>
                    <br><br>
                    <div class="footer__payment">
                        <a href="#"><img src="../content/frontend/img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="../content/frontend/img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="../content/frontend/img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="../content/frontend/img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="../content/frontend/img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Hỗ trợ</h6>
                    <ul>
                        <li><a href="#">Tư vấn sản phẩm</a></li>
                        <li><a href="#">Thanh toán</a></li>
                        <li><a href="#">Hóa đơn</a></li>
                        <li><a href="#">khác</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Các mục khác</h6></h6>
                    <ul>
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Chính sách bảo mật</a></a></a></li>
                        <li><a href="#">Quyền lợi khách hàng</a></li>
                        <li><a href="#">các dịch vụ khác</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>Đăng ký nhận ưu đãi</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Gửi</button>
                    </form>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form action="?page=shop" class="search-model-form" method="post">
            <input type="text" id="search-input" placeholder="Search here....." name ="search">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="../content/frontend/js/jquery-3.3.1.min.js"></script>
<script src="../content/frontend/js/bootstrap.min.js"></script>
<script src="../content/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="../content/frontend/js/jquery-ui.min.js"></script>
<script src="../content/frontend/js/mixitup.min.js"></script>
<script src="../content/frontend/js/jquery.countdown.min.js"></script>
<script src="../content/frontend/js/jquery.slicknav.js"></script>
<script src="../content/frontend/js/owl.carousel.min.js"></script>
<script src="../content/frontend/js/jquery.nicescroll.min.js"></script>
<script src="../content/frontend/js/main.js"></script>
</body>

</html>