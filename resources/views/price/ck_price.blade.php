@extends('layouts.main_detail')
@section('title', 'CKCare')
@section('content')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <!-- <div class="bread-ckcare"> </div> -->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.product')}}">Ứng dụng CKcare</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giá</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing slider-teams">
    <div class="container">
        <div class="text-center mb-5">
            <h1>BẢNG GIÁ</h1>
            <p>CKCare - Công cụ đánh giá & sàng lọc chuẩn hóa đầu tiên</p>
        </div>
        <div class="price-sub">
            <h3 class="text-uppercase text-center"> Dành cho nhà trường</h3>
            <div class="row">
                <div class="col-lg-3 d-flex justify-content-end">
                    <h5>Chọn số lượng</h5>
                </div>
                <div class="col-lg-9 d-flex justify-content-start">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                        <li class="nav-item">
                            <a id="left" class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#p50">50 người </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#p100">100 người </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#p200">200 người </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#p500">500 người</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#p1000">1000 người </a>
                        </li>
                        <li class="nav-item">
                            <a id="right" class="nav-link" data-bs-toggle="tab" href="#p2000">2000 người </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <style>
            .nav-tabs .nav-link {
                margin-bottom: -1px;
                margin-right: 3px;
                padding: 10px 30px 10px 30px;
                background: #ebebeb;
                font-size: 16px;
                font-weight: 400;
                color: #5a5454;
                border: 1px solid transparent;
                border-top-left-radius: 0.25rem;
                border-top-right-radius: 0.25rem;
            }

            .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active {
                color: #ffffff;
                background-color: #94c045;
                border-radius: 0px 0px 0px 0px;
                /* border-color: #dee2e6 #dee2e6 #fff; */
            }

            #left {
                border-top-left-radius: 25px;
                border-bottom-left-radius: 25px;
            }

            #right {
                border-top-right-radius: 25px;
                border-bottom-right-radius: 25px;
            }
        </style>
        <!-- ======= Pricing School ======= -->
        <div class="card-body tab-content">
            <!-- ======= Pricing 50 ======= -->
            <div class="tab-pane active" id="p50">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade">
                                <h3> 6 tháng</h3>
                                <h6>ĐƠN GIÁ</h6>
                                <h5>6.000.000đ</h5>
                                <h4 class="prices">6.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 0%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="https://ck.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                <div class="widget">
                                    <span class="heading-title">Khuyên dùng</span>
                                </div>
                                <div class="text-trending">
                                    <h3>1 năm</h3>
                                    <h5><del>12.000.000</del>đ</h5>
                                    <h6>GIẢM CÒN</h6>
                                    <h4 class="price-trending text-trending">8.000.000đ<span></span></h4>
                                    <ul class="text-trending">
                                        <li>Giảm giá 33%</li>
                                    </ul>
                                </div>
                                <div class="trending">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="200">
                                <h3>2 năm</h3>
                                <h5><del>24.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">18.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="300">
                                <span class="advanced">Mới</span>
                                <h3> 3 năm</h3>
                                <h5><del>36.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">27.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Pricing 100 ======= -->
            <div class="tab-pane" id="p100">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade">
                                <h3> 6 tháng</h3>
                                <h6>ĐƠN GIÁ</h6>
                                <h5>8.000.000đ</h5>
                                <h4 class="prices">8.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 0%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="https://ck.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                <div class="widget">
                                    <span class="heading-title">Khuyên dùng</span>
                                </div>
                                <div class="text-trending">
                                    <h3>1 năm</h3>
                                    <h5><del>16.000.000</del>đ</h5>
                                    <h6>GIẢM CÒN</h6>
                                    <h4 class="price-trending text-trending">10.000.000đ<span></span></h4>
                                    <ul class="text-trending">
                                        <li>Giảm giá 37.5%</li>
                                    </ul>
                                </div>

                                <div class="trending">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="200">
                                <h3>2 năm</h3>
                                <h5><del>32.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">24.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="300">
                                <span class="advanced">Mới</span>
                                <h3> 3 năm</h3>
                                <h5><del>48.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">36.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Pricing 200 ======= -->
            <div class="tab-pane" id="p200">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade">
                                <h3> 6 tháng</h3>
                                <h6>ĐƠN GIÁ</h6>
                                <h5>18.000.000đ</h5>
                                <h4 class="prices">18.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 0%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="https://ck.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                <div class="widget">
                                    <span class="heading-title">Khuyên dùng</span>
                                </div>
                                <div class="text-trending">
                                    <h3>1 năm</h3>
                                    <h5><del>36.000.000</del>đ</h5>
                                    <h6>GIẢM CÒN</h6>
                                    <h4 class="price-trending text-trending">20.000.000đ<span></span></h4>
                                    <ul class="text-trending">
                                        <li>Giảm giá 37.5%</li>
                                    </ul>
                                </div>

                                <div class="trending">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="200">
                                <h3>2 năm</h3>
                                <h5><del>72.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">48.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="300">
                                <span class="advanced">Mới</span>
                                <h3> 3 năm</h3>
                                <h5><del>144.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">72.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Pricing 500 ======= -->
            <div class="tab-pane" id="p500">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade">
                                <h3> 6 tháng</h3>
                                <h6>ĐƠN GIÁ</h6>
                                <h5>36.000.000đ</h5>
                                <h4 class="prices">36.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 0%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="https://ck.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                <div class="widget">
                                    <span class="heading-title">Khuyên dùng</span>
                                </div>
                                <div class="text-trending">
                                    <h3>1 năm</h3>
                                    <h5><del>72.000.000</del>đ</h5>
                                    <h6>GIẢM CÒN</h6>
                                    <h4 class="price-trending text-trending">40.000.000đ<span></span></h4>
                                    <ul class="text-trending">
                                        <li>Giảm giá 37.5%</li>
                                    </ul>
                                </div>

                                <div class="trending">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="200">
                                <h3>2 năm</h3>
                                <h5><del>144.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">96.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="300">
                                <span class="advanced">Mới</span>
                                <h3> 3 năm</h3>
                                <h5><del>216.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">144.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Pricing 1000 ======= -->
            <div class="tab-pane" id="p1000">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade">
                                <h3> 6 tháng</h3>
                                <h6>ĐƠN GIÁ</h6>
                                <h5>54.000.000đ</h5>
                                <h4 class="prices">54.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 0%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="https://ck.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                <div class="widget">
                                    <span class="heading-title">Khuyên dùng</span>
                                </div>
                                <div class="text-trending">
                                    <h3>1 năm</h3>
                                    <h5><del>108.000.000</del>đ</h5>
                                    <h6>GIẢM CÒN</h6>
                                    <h4 class="price-trending text-trending">60.000.000đ<span></span></h4>
                                    <ul class="text-trending">
                                        <li>Giảm giá 37.5%</li>
                                    </ul>
                                </div>

                                <div class="trending">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="200">
                                <h3>2 năm</h3>
                                <h5><del>216.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">144.000.00 đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="300">
                                <span class="advanced">Mới</span>
                                <h3> 3 năm</h3>
                                <h5><del>324.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">216.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======= Pricing 2000 ======= -->
            <div class="tab-pane" id="p2000">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade">
                                <h3> 6 tháng</h3>
                                <h6>ĐƠN GIÁ</h6>
                                <h5>72.000.000đ</h5>
                                <h4 class="prices">72.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 0%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="https://ck.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                            <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                <div class="widget">
                                    <span class="heading-title">Khuyên dùng</span>
                                </div>
                                <div class="text-trending">
                                    <h3>1 năm</h3>
                                    <h5><del>144.000.000</del>đ</h5>
                                    <h6>GIẢM CÒN</h6>
                                    <h4 class="price-trending text-trending">80.000.000đ<span></span></h4>
                                    <ul class="text-trending">
                                        <li>Giảm giá 37.5%</li>
                                    </ul>
                                </div>

                                <div class="trending">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="200">
                                <h3>2 năm</h3>
                                <h5><del>288.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">192.000.00 đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-5">
                            <div class="box slider-teams" data-aos="fade" data-aos-delay="300">
                                <span class="advanced">Mới</span>
                                <h3> 3 năm</h3>
                                <h5><del>432.000.000</del>đ</h5>
                                <h6>GIẢM CÒN</h6>
                                <h4 class="prices">288.000.000đ<span></span></h4>
                                <ul>
                                    <li>Giảm giá 25%</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ======= Pricing Section Mobile ======= -->
<section class="section-mobile slider-team">
    <div class="text-center mb-3">
        <h1>BẢNG GIÁ</h1>
        <p>CKCare - Công cụ đánh giá & sàng lọc <br /> chuẩn hóa đầu tiên</p>
    </div>
    <div class="price-sub">
        <!-- <h5 class="text-uppercase text-center"> Dành cho nhà trường</h5> -->
        <div class="d-flex justify-content-center">
            <h6>Chọn số lượng</h6>
        </div>
    </div>
    <div class="container responsive-tabs">
        <div id="content" class="tab-content" role="tablist">
            <div id="pane-A" class="card tab-pane fade mb-2 show active" role="tabpanel" aria-labelledby="tab-A">
                <a class="tab-act" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                    <div class="card-header" role="tab" id="heading-A">
                        <h5 class="text-center mb-0">
                            50 người
                        </h5>
                    </div>
                </a>
                <div id="collapse-A" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                    <div class="card-body">
                        <div id="pricing" class="pricing">
                            <!-- ======= Pricing 50 ======= -->
                            <div class="accordion-body">
                                <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                    <div class="widget">
                                        <span class="heading-title">Khuyên dùng</span>
                                    </div>
                                    <div class="text-trending">
                                        <h3>1 năm</h3>
                                        <h5><del>12.000.000</del>đ</h5>
                                        <h6>GIẢM CÒN</h6>
                                        <h4 class="price-trending text-trending">8.000.000đ<span></span></h4>
                                        <ul class="text-trending">
                                            <li>Giảm giá 33%</li>
                                        </ul>
                                    </div>
                                    <div class="trending">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="pane-B" class="card tab-pane fade mb-2" role="tabpanel" aria-labelledby="tab-B">
                <a class="tab-act" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="true" aria-controls="collapse-B">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="text-center mb-0">
                            100 người
                        </h5>
                    </div>
                </a>
                <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                    <div class="card-body">
                        <div id="pricing" class="pricing">
                            <!-- ======= Pricing 50 ======= -->
                            <div class="accordion-body">
                                <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                    <div class="widget">
                                        <span class="heading-title">Khuyên dùng</span>
                                    </div>
                                    <div class="text-trending">
                                        <h3>1 năm</h3>
                                        <h5><del>16.000.000</del>đ</h5>
                                        <h6>GIẢM CÒN</h6>
                                        <h4 class="price-trending text-trending">10.000.000đ<span></span></h4>
                                        <ul class="text-trending">
                                            <li>Giảm giá 37.5%</li>
                                        </ul>
                                    </div>
                                    <div class="trending">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="pane-C" class="card tab-pane fade mb-2" role="tabpanel" aria-labelledby="tab-C">
                <a class="tab-act" data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                    <div class="card-header" role="tab" id="heading-C">
                        <h5 class="text-center mb-0">
                            200 người
                        </h5>
                    </div>
                </a>
                <div id="collapse-C" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-C">
                    <div class="card-body">
                        <div id="pricing" class="pricing">
                            <!-- ======= Pricing 200 ======= -->
                            <div class="accordion-body">
                                <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                    <div class="widget">
                                        <span class="heading-title">Khuyên dùng</span>
                                    </div>
                                    <div class="text-trending">
                                        <h3>1 năm</h3>
                                        <h5><del>36.000.000</del>đ</h5>
                                        <h6>GIẢM CÒN</h6>
                                        <h4 class="price-trending text-trending">20.000.000đ<span></span></h4>
                                        <ul class="text-trending">
                                            <li>Giảm giá 37.5%</li>
                                        </ul>
                                    </div>
                                    <div class="trending">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="pane-D" class="card tab-pane fade mb-2" role="tabpanel" aria-labelledby="tab-D">
                <a class="tab-act" data-bs-toggle="collapse" href="#collapse-D" aria-expanded="true" aria-controls="collapse-D">
                    <div class="card-header" role="tab" id="heading-D">
                        <h5 class="text-center mb-0">
                            500 người
                        </h5>
                    </div>
                </a>
                <div id="collapse-D" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-D">
                    <div class="card-body">
                        <div id="pricing" class="pricing">
                            <!-- ======= Pricing 500 ======= -->
                            <div class="accordion-body">
                                <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                    <div class="widget">
                                        <span class="heading-title">Khuyên dùng</span>
                                    </div>
                                    <div class="text-trending">
                                        <h3>1 năm</h3>
                                        <h5><del>72.000.000</del>đ</h5>
                                        <h6>GIẢM CÒN</h6>
                                        <h4 class="price-trending text-trending">40.000.000đ<span></span></h4>
                                        <ul class="text-trending">
                                            <li>Giảm giá 37.5%</li>
                                        </ul>
                                    </div>
                                    <div class="trending">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="pane-E" class="card tab-pane fade mb-2" role="tabpanel" aria-labelledby="tab-E">
                <a class="tab-act" data-bs-toggle="collapse" href="#collapse-E" aria-expanded="true" aria-controls="collapse-E">
                    <div class="card-header" role="tab" id="heading-E">
                        <h5 class="text-center mb-0">
                            1000 người
                        </h5>
                    </div>
                </a>
                <div id="collapse-E" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-E">
                    <div class="card-body">
                        <div id="pricing" class="pricing">
                            <!-- ======= Pricing 1000 ======= -->
                            <div class="accordion-body">
                                <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                    <div class="widget">
                                        <span class="heading-title">Khuyên dùng</span>
                                    </div>
                                    <div class="text-trending">
                                        <h3>1 năm</h3>
                                        <h5><del>108.000.000</del>đ</h5>
                                        <h6>GIẢM CÒN</h6>
                                        <h4 class="price-trending text-trending">60.000.000đ<span></span></h4>
                                        <ul class="text-trending">
                                            <li>Giảm giá 37.5%</li>
                                        </ul>
                                    </div>
                                    <div class="trending">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="pane-F" class="card tab-pane fade mb-2" role="tabpanel" aria-labelledby="tab-F">
                <a class="tab-act" data-bs-toggle="collapse" href="#collapse-F" aria-expanded="true" aria-controls="collapse-F">
                    <div class="card-header" role="tab" id="heading-F">
                        <h5 class="text-center mb-0">
                            2000 người
                        </h5>
                    </div>
                </a>
                <div id="collapse-F" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-F">
                    <div class="card-body">
                        <div id="pricing" class="pricing">
                            <!-- ======= Pricing 2000 ======= -->
                            <div class="accordion-body">
                                <div class="box" data-aos="fade" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                    <div class="widget">
                                        <span class="heading-title">Khuyên dùng</span>
                                    </div>
                                    <div class="text-trending">
                                        <h3>1 năm</h3>
                                        <h5><del>144.000.000</del>đ</h5>
                                        <h6>GIẢM CÒN</h6>
                                        <h4 class="price-trending text-trending">80.000.000đ<span></span></h4>
                                        <ul class="text-trending">
                                            <li>Giảm giá 37.5%</li>
                                        </ul>
                                    </div>
                                    <div class="trending">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@include('layouts.ck_price_person')
<!-- End Pricing Section -->

@endsection