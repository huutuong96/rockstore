<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./index.html/page=shop"></i> shop</a>
                        <?php
                        if(isset($_GET["danh_muc"]) || isset($_GET["category_show"])){
                            echo '<span>'.$category["ten_dm"].'</span>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Danh Mục Sản Phẩm</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <?php
                                            foreach($list_category as $item_big){
                                                echo '<div class="card">
                                                        <div class="card-heading">
                                                            <a data-toggle="collapse" data-target="#'.$item_big["link"].'">'.$item_big["ten_dm"].'</a>
                                                        </div>
                                                        <div id="'.$item_big["link"].'" class="collapse" data-parent="#accordionExample">
                                                            <div class="card-body">
                                                                <ul>';
                                                foreach ($list_materials as $item) {
                                                echo                 '<li><a href="index.php?page=shop&show='.$item["id"].'&danh_muc='.$item_big["id"].'">'.$item["ten_da"].'</a></li>';
                                                }
                                                echo            '</ul>
                                                            </div>
                                                        </div>
                                                    </div>';
                                            }                                
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                    <?php                     
                       if(count($list_product_all) === 0){
                         echo '<div class="container mt-5">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Thông báo!</strong> Hiện tại không có sản phẩm nào trong danh sách.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>';
                       }else{
                        foreach($list_product_all as $item){
                            echo '<div class=" col-md-4 col-sm-6 mix ">
                            <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="../content/frontend/img/product/'.$item["hinh"].'">
                                <div class="label new">New</div>
                                <ul class="product__hover" style="display: flex;justify-content: center;">
                                
                                    <li><a href="../content/frontend/img/product/'.$item["hinh"].'" class="image-popup"><span class="arrow_expand"></span></a></li>
                                    <li><a href="#"><span class="icon_heart_alt"></a></li>
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
                                if(isset($_GET["category_show"])){
                                    $products_number = count($list_product_all);
                                    $page_number = $products_number / 9;
                                    if($products_number % 9 !== 0){
                                        $page_number += 1;
                                    }
                                }else{
                                    $page_number = $products_number[0][0] / 9;
                                    if($products_number[0][0] % 9 !== 0){
                                        $page_number += 1;
                                    }
                                }
                               echo '<div class="col-lg-12 text-center">
                                    <div class="pagination__option">';
                                    
                                    for($i=1; $i <= $page_number; $i++){
                                        $j = $i - 1;                                     
                                        echo'<a href="index.php?page=shop&number='.$j.'">'.$i.'</a>';
                                    };
                                    if($j > $page_number -1){
                                        $j-=1;
                                        echo'
                                        <a href="index.php?page=shop&number='.$j.'"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>'; 
                                    }else{
                                        echo'
                                        <a href="index.php?page=shop&number='.$j.'"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>'; 
                                    }
                       }                          
                        
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    