@section('title', 'Hành trình 1')
@section('content')
@extends('layouts.main')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-ckcare"></div>
        <div class="bread-pre-school">
            <div class="container">
                <div class="header-hero">
                    <div class="header-hero__slogan">
                        <h2>Hãy bắt đầu theo dõi & sàng lọc <br /> cho trẻ ngay từ hôm nay!</h2>
                    </div>
                    <div class="header__btn__cta">
                        <a href="https://ck.youcare.vn/user/login" target="_blank">
                            <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slogan-ckcare">
            <p class="slogan">
                <q>Không trẻ em nào bị bỏ lại phía sau</q>
            </p>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_school')}}">Trường học</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hành trình 1</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">

        <div class="section-title mt-5">
            <h2 class="text-uppercase">Giới thiệu bộ công cụ</h2>
        </div>

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mt-3">
                                        <a href="https://checkingcare.vn/gioi-thieu-asq-3/" target="_blank">
                                            <div class="icon-box">
                                                <i class="bi bi-shop" style="color: #ffbb2c;"></i>
                                                <h3>ASQ-3</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-3">
                                        <a href="https://checkingcare.vn/cbcl/" target="_blank">
                                            <div class="icon-box">
                                                <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                                                <h3>CBCL</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mt-3">
                                        <a href="https://checkingcare.vn/adhd/" target="_blank">
                                            <div class="icon-box">
                                                <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                                                <h3>ADHD</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mt-3">
                                        <a href="https://checkingcare.vn/m-chart/" target="_blank">
                                            <div class="icon-box">
                                                <i class="bi bi-paint-bucket" style="color: #e361ff;"></i>
                                                <h3>M-CHAT</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="col-lg-12 col-md-12">
                                    <div>
                                        <img class="card" src="{{asset('assets/img/ck-detail.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->


        <!-- ======= Features Section ======= -->
        <div class="container-fluild aos-init aos-animate">
            <div class="container">
                <div class="pre__card">
                    <div class="pre__card__hd">
                        <div class="section-title">
                            <h2 class="ck_header">QUY TRÌNH SÀNG LỌC</h2>
                        </div>
                        <div class="pre__card_box">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col pre__box">
                                    <a target="_blank" href="{{route('layouts.procedure.teacher')}}">
                                        <div class="pre__box_1">
                                            <div class="pre__img">
                                                <img src="{{asset('assets/img/clients/pre-danh-cho-giao-vien.jpg')}}" alt="">
                                            </div>
                                            <div class="pre__box__content">
                                                DÀNH CHO GIÁO VIÊN
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col pre__box">
                                    <a target="_blank" href="{{route('layouts.procedure.manager')}}">
                                        <div class="pre__box_2">
                                            <div class="pre__img">
                                                <img src="{{asset('assets/img/clients/pre-danh-cho-quan-ly.jpg')}}" alt="">
                                            </div>
                                            <div class="pre__box__content">
                                                DÀNH CHO QUẢN LÝ
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col pre__box">
                                    <a target="_blank" href="{{route('layouts.procedure.parents')}}">
                                        <div class="pre__box_3">
                                            <div class="pre__img">
                                                <img src="{{asset('assets/img/clients/pre-danh-cho-cha-me.jpg')}}" alt="">
                                            </div>
                                            <div class="pre__box__content">
                                                DÀNH CHO CHA MẸ
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container__mobile">
                    <div class="section-title">
                        <h2 class="ck_header">QUY TRÌNH SÀNG LỌC</h2>
                    </div>
                    <div class="container__mobile__items">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-lg-6 col-md-6 mt-3">
                                    <div class="pre__box_hd">
                                        <a href="{{route('layouts.procedure.teacher')}}" target="_blank">
                                            <div class="icon__box text-center">
                                                DÀNH CHO GIÁO VIÊN
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-3">
                                    <div class="pre__box_hd">
                                        <a target="_blank" href="{{route('layouts.procedure.manager')}}">
                                            <div class="icon__box text-center">
                                                DÀNH CHO QUẢN LÝ
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-3">
                                    <div class="pre__box_hd">
                                        <a target="_blank" href="{{route('layouts.procedure.parents')}}">
                                            <div class="icon__box text-center">
                                                DÀNH CHO CHA MẸ
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Section -->


        @include('layouts.team')
        @include('layouts.say')

    </section>
    
    @include('clients.about.group')

</main>

<!-- End #main -->

@endsection