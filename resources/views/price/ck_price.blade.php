@extends('layouts.main_detail')
@section('title', 'CkCare')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <!-- <div class="bread-ckcare"> </div> -->
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.product')}}">Ứng dụng Ckcare</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giá</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                        <h3>Chọn số lượng &nbsp;</h3>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#login">50 người</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#infor">100 người </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#success">200 người </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-body tab-content">
                <div class="tab-pane active" id="login">
                    <div class="accordion-body">

                        <div class="row">
                            <div class="col-lg-3 col-md-6 mt-5">
                                <div class="box" data-aos="fade-up">
                                    <h3> 6 tháng</h3>
                                    <h4>6.000.000đ<span></span></h4>
                                    <ul>
                                        <li>Giảm giá 0%</li>
                                        <li>Giảm giá 0%</li>
                                        <li>Giảm giá 0%</li>
                                        <li>Giảm giá 0%</li>
                                        <li>Giảm giá 0%</li>
                                    </ul>
                                    <div class="btn-wrap">
                                        <a href="https://ck.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                                <div class="box" data-aos="fade-up" data-aos-delay="100" style="background-color: #526a24; color: #fff; border-radius: 20px;">
                                    <div class="widget">
                                        <span class="heading-title">Khuyên dùng</span>
                                    </div>
                                    <div class="text-trending">
                                        <h3>1 năm</h3>
                                        <h4 class="text-trending">10.000.000đ<span></span></h4>
                                        <ul class="text-trending">
                                            <li>Giảm giá 33%</li>
                                            <li>Giảm giá 33%</li>
                                            <li>Giảm giá 33%</li>
                                            <li>Giảm giá 33%</li>
                                            <li>Giảm giá 33%</li>
                                        </ul>
                                    </div>

                                    <div class="trending">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5">
                                <div class="box" data-aos="fade-up" data-aos-delay="200">
                                    <h3>2 năm</h3>
                                    <h4>18.000.000 đ<span></span></h4>
                                    <ul>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                    </ul>
                                    <div class="btn-wrap">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5">
                                <div class="box" data-aos="fade-up" data-aos-delay="300">
                                    <span class="advanced">Mới</span>
                                    <h3> 3 năm</h3>
                                    <h4>27.000.000đ<span></span></h4>
                                    <ul>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                        <li>Giảm giá 25%</li>
                                    </ul>
                                    <div class="btn-wrap">
                                        <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <b>Đăng kí</b>
                    </div>
                </div>
                <div class="tab-pane" id="infor">
                    <div class="accordion-body">

                    </div>
                </div>
                <div class="tab-pane" id="success">
                    <div class="accordion-body">
                        <b>Thêm trẻ</b>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- End Pricing Section -->
</main>

@endsection