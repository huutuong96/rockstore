
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <?php               
                            echo'<a href="index.php"><i class="fa fa-home"></i> Home</a>
                                 <a href="#">'.$product["ten_dm"].' </a>
                                 <span>'.$product["ten_sp"].'</span>';
                        ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                           <?php
                               $img=[$product["hinh_1"]??"", $product["hinh"]??"", $product["hinh_2"]??"", $product["hinh_3"]??""];
                               for ($i=0; $i < 4; $i++) { 
                                $j=$i+1;
                                echo'<a class="pt" href="#product-'.$j.'">
                                        <img src="../content/frontend/img/product/'.$img[$i].'" alt="">
                                    </a>';
                               } 
                           ?>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        $j=$i+1;
                                        echo'<img data-hash="product-'.$j.'" class="product__big__content/frontend/img" src="../content/frontend/img/product/'.$img[$i].'" alt="" style="height:540px"> ';
                                       }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <?php
                            echo' <h3>'.$product["ten_sp"].' <span>Chất liệu: <br>'.$product["ten_sp"].'được tạo nên từ những dòng đá '.$product["chat_lieu"].' tự nhiên</span></h3>
                            <div class="rating">';
                            for ($i=0; $i < $product["sao_danh_gia"]; $i++) { 
                                echo'<i class="fa fa-star" style="margin-right: unset;"></i>';
                            }
                            echo'<span>( 138 reviews )</span>
                                </div>';
                            if($product["giam_gia"] == 0){
                                echo'<div class="product__details__price">'.number_format($product["don_gia"]).' VND</div>';
                            }else{
                                echo'<div class="product__details__price">'.number_format($product["don_gia"]-($product["don_gia"] * $product["giam_gia"] / 100)).' VND<span>'.number_format($product["don_gia"]) .' VND</span></div>';
                            }
                            
                            echo'<p>'.$product["mo_ta"].'</p>
                            <form action="views/handle_cart.php" method="post">
                                <div class="product__details__button" >
                                    <div class="quantity">
                                        <span>Số lượng:</span>
                                        <div class="pro-qty">
                                            <input type="text" value="1" name="so_luong">
                                        </div>
                                    </div>
                                    <input type="hidden" name="hinh" value="'.$product["hinh"].'">
                                    <input type="hidden" name="id" value="'.$product["id"].'">
                                    <input type="hidden" name="ten_sp" value="'.$product["ten_sp"].'">
                                    <input type="hidden" name="don_gia" value="'.$product["don_gia"].'">
                                    <button type="submit" style="border:unset; border-radius:5px;height: 50px;"><span class="icon_bag_alt"></span > Thêm vào giỏ hàng</button>
                                </div>
                                </form>
                                <div class="product__details__widget">
                                    <ul> 
                                        <li>
                                            <span>Ưu Đãi:</span>
                                            <p>Miễn phí vận chuển</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>';
                        ?>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Bình luận ( 2 )</a>
                            </li>
                        </ul>
                        <div class="tab-../content">
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <h6>Tường kà</h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                                <h6>Tú lợn</h6>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                                <a href="">xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="related__title">
                        <h5>Những sản phẩm tương tự</h5>
                    </div>
                </div>
                <?php
                foreach($list_product_all as $item){
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 mix ">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="../content/frontend/img/product/'.$item["hinh"].'">
                                    <div class="label new">New</div>
                                    <ul class="product__hover">
                                        <li><a href="../content/frontend/img/product/'.$item["hinh"].'" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></a></li>
                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
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
    <!-- Product Details Section End -->