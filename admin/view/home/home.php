
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2"  style="font-size: large;font-weight: bold;">Khách hàng</p>
                        <h6 class="mb-0"><?php 
                                              echo ($all_user[0][0] - 1)." Khách hàng" ;
                                         ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="font-size: large;font-weight: bold;">Danh Mục</p>
                        <h6 class="mb-0"><?php 
                                              echo $all_category[0][0]." danh mục" ;
                                         ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="font-size: large;font-weight: bold;">Sản Phẩm</p>
                        <h6 class="mb-0"><?php 
                                              echo $all_product[0][0]." sản phẩm" ;
                                         ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="font-size: large;font-weight: bold;">Bài Viết</p>
                        <h6 class="mb-0"><?php 
                                              echo $all_blog[0][0]." sản phẩm" ;
                                         ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0" style="font-size: large;font-weight: bold;">Đơn Hàng</h6>
                <a href="">Xem Thêm</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col" style="width: 4%;"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col" style="width: 15%;">Ngày Xuất</th>
                            <th scope="col" >Tên Khách Hàng</th>
                            <th scope="col" >tổng tiền</th>
                            <th scope="col" style="width: 10%;">Trạng Thái</th>
                            <th scope="col" style="width: 15%;">Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Xem CT</a>
                                <a class="btn btn-sm btn-primary" href="">Hủy Đơn</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>Paid</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Xem CT</a>
                                <a class="btn btn-sm btn-primary" href="">Hủy Đơn</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>Paid</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="" style="color:black;font-weight: bold;">Xem CT</a>
                                <a class="btn btn-sm btn-primary" href="" style="color:black;font-weight: bold;">Hủy Đơn</a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->


    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0" style="font-size: large;font-weight: bold;">Bình Luận</h6>
                        <a href="" style="color:aliceblue;font-weight: bold;">Xem Thêm</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0" style="font-size: large;font-weight: bold;">Sản phẩm bán chạy</h6>
                        <a href="" style="color:aliceblue;font-weight: bold;">Xem Thêm</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div><div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div><div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0" style="font-size: large;font-weight: bold;">Sản phẩm được quan tâm</h6>
                        <a href="" style="color:aliceblue;font-weight: bold;">Xem Thêm</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div><div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div><div class="d-flex align-items-center border-bottom py-2">
                        <img class="rounded-circle flex-shrink-0" src="{{asset('frontend/images/user.jpg')}}" alt="" style="width: 30px; height: 30px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->
