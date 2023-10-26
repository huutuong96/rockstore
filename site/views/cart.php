<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span><?= $title?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
        <form action=" "  method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                                <?php
                                    $i = 0;
                                    if ( $list && is_array($list)) {
                                        echo '<thead>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th>Giá tiền</th>
                                                    <th>Số Lượng</th>
                                                    <th>Tổng Tiền</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                        
                                        foreach ($list as $item) {
                                            echo '<tr>
                                                    <td class="cart__product__item">
                                                        <img src="../content/frontend/img/product/'.$item["hinh"].'" alt="" style="height:90px; width:90px">
                                                        <div class="cart__product__item__title">
                                                            <h6>'.$item["ten_sp"].'</h6>
                                                        </div>
                                                    </td>
                                                    <td class="cart__price">'.number_format($item["don_gia"]).' VND</td>
                                                    <td class="cart__quantity">
                                                        <div class="pro-qty">
                                                            <input type="text" value="'.$item["so_luong"].'" name="so_luong_sp'.$i.'" >
                                                        </div>
                                                    </td>
                                                    <td class="cart__total">'.number_format($item["don_gia"] * $item["so_luong"]).' VND</td>
                                                        <input type="hidden" name="vi_tri" value="'.$i.'">
                                                        <td class="cart__close"><a href="views/handle_cart.php?vi_tri='.$i.'&for='. $for.'" style="border:unset; border-radius:40%"><span class="icon_close"></span></a></td>   
                                                </tr>';
                                            $i++;
                                        }
                                    } else {
                                            echo '<div class="container mt-5">
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        <strong>Thông báo!</strong> Hiện tại không có sản phẩm nào trong '. $title.'
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>';
                                            }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="index.php?page=shop">Tiếp tục mua hàng</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <input type="hidden" value="<?=$i?>" name="so_luong_sp" >
                        <a href=""><button type="submit" style="border:unset; background-color: transparent ;" name="cap_nhat"><span class="icon_loading"></span>Cập nhật giỏ hàng</button></a>
                    </div>
                </div>
            </div>
        </form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">
                        <h6 style="font-size: large;">Mã giảm giá</h6><br>
                        <form action="#">
                            <input type="text" placeholder="Nhập mã giảm giá">
                            <button type="submit" class="site-btn">Sử dụng</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <form action="index.php?page=checkout" method="post">
                        <?php
                        $tong_tien= 0;
                        if ( $list && is_array($list)) {
                            foreach ($list as $item) {
                                $tong_tien += ($item["don_gia"] * $item["so_luong"]);
                            }}
                            echo '<h6>Tổng Hóa Đơn</h6>
                                    <ul>
                                        <li>Tổng tiền <span>'. number_format($tong_tien) .' VND</span></li>
                                        <li>Số Tiền <span>'. number_format($tong_tien) .' VND</span></li>
                                    </ul>
                                    <button  class="primary-btn" style="width: 100%;" name="thanh_toan">thanh toán ngay</button>';
                        ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Shop Cart Section End -->