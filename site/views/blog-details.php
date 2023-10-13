 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./blog.html">Blog</a>
                        <span>blog-details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="blog__details__content">
                        <div class="blog__details__item">
                            <img src="../content/frontend/img/blog/<?= $blog_item["hinh"]?>" height="400px" alt="">
                            <div class="blog__details__item__title">
                                <span class="tip">hot new</span>
                                <h4>Tiêu đề:<?= $blog_item["tieu_de"]?></h4>
                                <ul>
                                    <li>by <span><?= $blog_item["id"]?></span></li>
                                    <li><?= $blog_item["date"]?></li>
                                    <li>39 Comments</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__details__desc">
                            <p><?= $blog_item["noi_dung"]?></p>
                        </div>
                        <div class="blog__details__quote">
                            <div class="icon"><i class="fa fa-quote-left"></i></div>
                           
                        </div>
                        <div class="blog__details__comment">
                            <h5>3 Bình luận</h5>
                            <a href="#" class="leave-btn">Để lại bình luận</a>
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
                <div class="col-lg-4 col-md-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <div class="section-title">
                                <h4>blog </h4>
                            </div>
                            <ul>
                                <li><a href="#">tất cả bài viết<span>(250)</span></a></li>
                                <li><a href="#">phong thủy<span>(80)</span></a></li>
                                <li><a href="#">tuần lễ vàng<span>(75)</span></a></li>
                                <li><a href="#">những sản phẩn độc đáo<span>(35)</span></a></li>
                                <li><a href="#">mẹo hay <span>(60)</span></a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <div class="section-title">
                                <h4>những bài viết liên quan</h4>
                            </div>
                            <?php foreach($list_blog as $item):?>
                            <a href="#" class="blog__feature__item">
                                <div class="blog__feature__item__pic">
                                    <img src="../content/frontend/img/blog/<?= $item["hinh"]?>" height="65px" width="100px" alt="">
                                </div>
                                <div class="blog__feature__item__text">
                                    <h6><?= $item["tieu_de"]?></h6>
                                    <span><?= $item["date"]?></span>
                                </div>
                            </a>
                            <?php endforeach?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    