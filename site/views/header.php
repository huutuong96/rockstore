
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../content/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../content/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../content/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../content/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../content/frontend/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../content/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../content/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../content/frontend/css/style.css" type="text/css">
</head>

<body>
    
    <!-- Page Preloder  -->
     <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
            </a></li>
            <li><a href="index.php?page=cart"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="index.php"><img src="content/frontend/img/logo" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Đăng nhập</a>
            <a href="#">Đăng ký</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="../content/frontend/img/logo-black.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul >
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="index.php?page=shop">Cửa Hàng</a></li>
                            <li><a href="#">Trang Khác</a>
                                <ul class="dropdown">
                                    <li><a href="index.php?page=cart">Giỏ Hàng</a></li>
                                    <li><a href="index.php?page=checkout">Thanh Toán</a></li>
                                    <li><a href="index.php?page=user">quản lý user</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?page=blog">Blog</a></li>
                            <li><a href="index.php?page=contact">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="index.php?page=login">Đăng Nhập</a>
                            <a href="index.php?page=register">Đăng ký</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="index.php?page=cart"><span class="icon_heart_alt"></span>
                                <div class="tip"><?= $sl_like; ?></div>
                            </a></li>
                            <li><a href="index.php?page=cart&cart"><span class="icon_bag_alt"></span>
                                <div class="tip"><?= $sl_cart; ?></div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->