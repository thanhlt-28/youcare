@extends('layouts.main')
@section('title', 'CKSchool')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-ckcare"></div>
        <div class="bread-ckcare__school">
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
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CKSchool</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="ck_header">CKSCHOOL LÀ GÌ?</h2>
        </div>
        <div class="container__ckcare" data-aos="fade-up">
            <div class="row">
                <div class="col-md-5 slider-teams d-flex align-items-center justify-content-center">
                    <div class="ck__content">
                        <p class="ck__content_item">
                            CKCare là sản phẩm công nghệ được ứng dụng trong việc theo dõi, sàng lọc và đánh giá nhằm phát hiện sớm những vấn đề rối loạn phát triển cũng như sức khỏe tâm thần của trẻ từ 12 tháng tuổi đến 18 tuổi.
                        </p>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="about-knowledge">
                        <div class="container aos-init aos-animate" data-aos="fade-in">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 video-box align-self-baseline position-relative">
                                    <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                    <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ckcare__total_school">
                <div class="ckcare__total_school_content">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="total__school d-flex justify-content-start">
                                <img class="total__school_item" src="{{asset('assets/img/svg/ckcare-school-total.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="btn__pre d-flex">
                                <a class="total_click" target="_blank" href="{{route('layouts.ck_detail.ckcare_preschool')}}">Trường Mầm Non</a>
                            </div>

                            <div class="btn__high d-flex">
                                <a class="total_click" target="_blank" href="{{route('layouts.ck_detail.ckcare_highschool')}}">Trường Phổ Thông</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.ck_detail.ckcare_motion')

    </div>

    @include('layouts.team')
    @include('layouts.say')

</main>

@include('clients.about.group')

@endsection