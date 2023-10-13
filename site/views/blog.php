 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <?php for ($i=0; $i < 2; $i++): ?>
                        <div class="blog__item">
                            <div class="blog__item__pic large__item set-bg" data-setbg="../content/frontend/img/blog/<?= $list_blog[$i]["hinh"]?>"></div>
                            <div class="blog__item__text">
                                <h6><a href="index.php?page=blog&id=<?= $list_blog[$i]["id"]?>"><?= $list_blog[$i]["tieu_de"]?></a></h6>
                                <ul>
                                    <li>by <span><?= $list_blog[$i]["id_kh"]?></span></li>
                                    <li><?= $list_blog[$i]["date"]?></li>
                                </ul>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <?php for ($i=2; $i < 4; $i++): ?>
                        <div class="blog__item">
                            <div class="blog__item__pic large__item set-bg" data-setbg="../content/frontend/img/blog/<?= $list_blog[$i]["hinh"]?>"></div>
                            <div class="blog__item__text">
                                <h6><a href="index.php?page=blog&id=<?= $list_blog[$i]["id"]?>"><?= $list_blog[$i]["tieu_de"]?></a></h6>
                                <ul>
                                    <li>by <span><?= $list_blog[$i]["id_kh"]?></span></li>
                                    <li><?= $list_blog[$i]["date"]?></li>
                                </ul>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <?php for ($i=4; $i < 6; $i++): ?>
                        <div class="blog__item">
                            <div class="blog__item__pic large__item set-bg" data-setbg="../content/frontend/img/blog/<?= $list_blog[$i]["hinh"]?>"></div>
                            <div class="blog__item__text">
                                <h6><a href="index.php?page=blog&id=<?= $list_blog[$i]["id"]?>"><?= $list_blog[$i]["tieu_de"]?></a></h6>
                                <ul>
                                    <li>by <span><?= $list_blog[$i]["id_kh"]?></span></li>
                                    <li><?= $list_blog[$i]["date"]?></li>
                                </ul>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="primary-btn load-btn">Xem Thêm </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    