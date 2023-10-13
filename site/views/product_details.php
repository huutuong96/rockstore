
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
                        <a href="#" class="leave-btn" style="float:right">Để lại bình luận</a>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">

                        <div style="display: flex; align-items: flex-end; margin:10px 10px 10px 0;">
                        <img src="../content/frontend/img/user/user.jpg" style=" border-radius:50%; margin-right: 10px; height:50px" alt="">
                        <h6>Tường kà</h6>
                        </div>
                        <p>Tôi đã mua sản phẩm này và thực sự hài lòng về sự đẹp và sự tinh tế của nó. Chất lượng đá quý là xuất sắc, và tượng được tạo hình một cách rất tỉ mỉ. Nó không chỉ là một món trang trí đẹp mắt mà còn là một biểu tượng của sự tĩnh lặng và thăng hoa. Tôi rất vui mua sản phẩm này và sẽ khuyên bạn bè và gia đình của mình nên thử nó</p>
                        <div class="blog__comment__item__text">
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                <li><i class="fa fa-heart-o"></i> 12</li>
                                <li><i class="fa fa-share"></i> 1</li>
                            </ul>
                        </div>

                        <div style="display: flex; align-items: flex-end; margin:10px 10px 10px 0;">
                        <img src="../content/frontend/img/user/tu.jpg" style=" border-radius:50%; margin-right: 10px; height:50px" alt="">
                        <h6>Tú lợn</h6>
                        </div>
                        <p>Sản phẩm đá quý này thực sự tuyệt vời! Chất lượng tượng đá tạo thêm vẻ đẹp tự nhiên và tinh tế cho bất kỳ không gian nào. Tôi ấn tượng bởi sự tỉ mỉ trong từng chi tiết, từ chất lượng đá quý cho đến sự tạo hình tài tình của tượng.</p>
                        <div class="blog__comment__item__text">
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                <li><i class="fa fa-heart-o"></i> 12</li>
                                <li><i class="fa fa-share"></i> 1</li>
                            </ul>
                        </div>
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