
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container-fluid">
    <?php
        echo'<div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg"
                    data-setbg="../content/frontend/img/categories/'.$banners[0]["hinh"].'">
                    <div class="categories__text" style="margin-bottom: 66%;">
                        <h1>'.$banners[0]["ten_dm"].'</h1>
                        <p>'.$banners[0]["ghi_chu"].'</p>
                        <a href="index.php?page=shop&category_show='.$banners[0]["id"].'">Xem ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">';
        for ($i=1; $i < count($banners); $i++) { 
            echo '<div class="col-lg-6 col-md-6 col-sm-6 p-0">
                    <div class="categories__item set-bg" data-setbg="../content/frontend/img/categories/'.$banners[$i]["hinh"].'">
                        <div class="categories__text" style="margin-bottom: 66%;">
                            <h4>'.$banners[$i]["ten_dm"].'</h4>
                            <p>358 sản phẩm</p>
                            <a href="index.php?page=shop&category_show='.$banners[$i]["id"].'">Xem ngay</a>
                        </div>
                    </div>
                </div>';
        }
    ?>
    </div>
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sản Phẩm Mới</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                <li class="active" data-filter="*">Tất cả</li>
                <?php
                    foreach($title as $item){
                        echo '<li data-filter=".'.$item["link"].'">'.$item["ten_dm"].'</li>';
                    }
                ?>
                </ul>
            </div> 
        </div>
        <div class="row property__gallery">
            <?php
                foreach($list_product_all as $item){
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 mix '.$item["link"].'">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="../content/frontend/img/product/'.$item["hinh"].'">
                                    <div class="label new">New</div>
                                    <ul class="product__hover" style="display: flex;justify-content: center;">
                                    
                                        <li><a href="../content/frontend/img/product/'.$item["hinh"].'" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="views/handle_cart.php?id='.$item["id"].'&comback"><span class="icon_heart_alt"></a></li>
                                        <form action="views/handle_cart.php" method="post" >
                                            <li><a style="overflow: hidden;"><button id="add" type="submit" style="border:unset;width:100%"><span class="icon_bag_alt"></span></button></a></li>
                                            <input type="hidden" name="comback" value="">
                                            <input type="hidden" name="hinh" value="'.$item["hinh"].'">
                                            <input type="hidden" name="id" value="'.$item["id"].'">
                                            <input type="hidden" name="ten_sp" value="'.$item["ten_sp"].'">
                                            <input type="hidden" name="don_gia" value="'.$item["don_gia"].'">
                                            <input type="hidden" name="thanh_cong" value="">
                                            <input type="hidden" name="so_luong" value="1">
                                        </form>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="index.php?page=product-details&id='.$item["id"].'">'.$item["ten_sp"].'</a></h6>
                                    <div class="rating">';
                                         for($i=0; $i < $item["sao_danh_gia"]; $i++){ 
                                              echo'<i class="fa fa-star" style="margin-right: unset;"></i>';
                                         };
                          echo      '</div>
                                    <div class="product__price">'.number_format($item["don_gia"]).' VND</div>
                                </div>
                            </div>
                        </div>'; 
                                  
                }
            ?>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="../content/frontend/img/banner/banner-nav2.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>Chọn đá quý, chọn sự đẳng cấp</span>
                            <h1>Welcome Rock Store </h1>
                            <a href="#">Xem ngay</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>Chọn đá quý, chọn sự đẳng cấp</span>
                            <h1>Welcome Rock Store </h1>
                            <a href="#">Xem ngay</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>Chọn đá quý, chọn sự đẳng cấp</span>
                            <h1>Welcome Rock Store </h1>
                            <a href="#">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
<section class="trend spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Sản phẩm khuyến mãi</h4>
                    </div>
                    <?php
                        foreach ($list_sale as $item) {
                            echo '<a href="?page=product-details&id='.$item["id"].'">
                                <div class="trend__item">
                                    <div class="trend__item__pic">
                                        <img src="../content/frontend/img/product/'.$item["hinh"].'" alt="" style="height:90px; width:90px">
                                    </div>
                                    <div class="trend__item__text">
                                        <h6>'.$item["ten_sp"].'</h6>
                                        <div class="rating">';
                                   for($i=0; $i < $item["sao_danh_gia"]; $i++){ 
                                       echo'<i class="fa fa-star" style="margin-right: unset;"></i>';
                                   };
                                 echo   '</div>
                                        <div class="product__price">'.number_format($item["don_gia"]).' VND</div>
                                    </div>
                                </div></a>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Sản phẩm yêu thích</h4>
                    </div>
                    <?php
                        foreach ($list_view as $item) {
                            echo '<a href="?page=product-details&id='.$item["id"].'">
                                <div class="trend__item">
                                    <div class="trend__item__pic">
                                        <img src="../content/frontend/img/product/'.$item["hinh"].'" alt="" style="height:90px; width:90px">
                                    </div>
                                    <div class="trend__item__text">
                                        <h6>'.$item["ten_sp"].'</h6>
                                        <div class="rating">';
                                   for($i=0; $i < $item["sao_danh_gia"]; $i++){ 
                                       echo'<i class="fa fa-star" style="margin-right: unset;"></i>';
                                   };
                                 echo   '</div>
                                        <div class="product__price">'.number_format($item["don_gia"]).' VND</div>
                                    </div>
                                </div></a>';
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend__content">
                    <div class="section-title">
                        <h4>Sản phẩm bán chạy </h4>
                    </div>
                    <?php
                        
                        foreach ($list_hot as $item) {
                            echo '<a href="?page=product-details&id='.$item["id"].'">
                                <div class="trend__item">
                                    <div class="trend__item__pic">
                                        <img src="../content/frontend/img/product/'.$item["hinh"].'" alt="" style="height:90px; width:90px">
                                    </div>
                                    <div class="trend__item__text">
                                        <h6>'.$item["ten_sp"].'</h6>
                                        <div class="rating">';
                                   for($i=0; $i < $item["sao_danh_gia"]; $i++){ 
                                       echo'<i class="fa fa-star" style="margin-right: unset;"></i>';
                                   };
                                 echo   '</div>
                                        <div class="product__price">'.number_format($item["don_gia"]).' VND</div>
                                    </div>
                                </div></a>';
                        }
                        if($numbel < 3){
                            foreach ($more as $item) {
                                echo '<a href="?page=product-details&id='.$item["id"].'">
                                    <div class="trend__item">
                                        <div class="trend__item__pic">
                                            <img src="../content/frontend/img/product/'.$item["hinh"].'" alt="" style="height:90px; width:90px">
                                        </div>
                                        <div class="trend__item__text">
                                            <h6>'.$item["ten_sp"].'</h6>
                                            <div class="rating">';
                                       for($i=0; $i < $item["sao_danh_gia"]; $i++){ 
                                           echo'<i class="fa fa-star" style="margin-right: unset;"></i>';
                                       };
                                     echo   '</div>
                                            <div class="product__price">'.number_format($item["don_gia"]).' VND</div>
                                        </div>
                                    </div></a>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trend Section End -->


