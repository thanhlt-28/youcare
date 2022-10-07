@section('title', 'Can thiệp & trị liệu')
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
                    <li class="breadcrumb-item active" aria-current="page">Can thiệp & trị liệu</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">

        <div class="section-title mt-5">
            <h2 class="text-uppercase">Can thiệp & trị liệu</h2>
        </div>
        <section class="section min-vh-50 d-flex flex-column align-items-center justify-content-center">
            <h2>Nội dung đang được xây dựng, vui lòng quay trở lại trang chủ.</h2>
            <a class="btn btn-success rounded-pill text-white" href="{{('/')}}">Trang chủ</a>
            <img src="{{asset('assets/img/not-found.jpg')}}" width="30%" class="img-fluid" alt="Page Not Found">
        </section>
        

        @include('layouts.team')
        @include('layouts.say')

    </section>

    @include('clients.about.group')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</main>

<!-- End #main -->

@endsection