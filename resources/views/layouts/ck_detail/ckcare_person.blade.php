@extends('layouts.main')
@section('title', 'Tổ chức')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-ckcare"></div>
        <div class="bread-person-school">
            <div class="container">
                <div class="person_slogan">
                    <a href="https://ck.youcare.vn/user/login" target="_blank">
                        <img class="person__img" src="{{asset('assets/img/svg/ckcare_person_slogan.svg')}}" alt="">
                    </a>
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
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_school')}}">CKSchool</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cá nhân</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container">
        <div class="section-title">
            <h2 class="ck_header">CKSCHOOL LÀ GÌ?</h2>
        </div>
        <div class="container__ckcare">
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
                        <div class="container aos-init aos-animate">
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
        </div>
    </div>

    <section class="person_sec">
        <div class="container">
            <div class="person__title">
                <h2 class="person__header">HÃY HÀNH ĐỘNG NGAY ĐỂ CON CÓ THÊM NHIỀU CƠ HỘI</h2>
            </div>

            <div class="person_content">
                <img class="person__content__img" src="{{asset('assets/img/svg/person_action.svg')}}" alt="">
            </div>
        </div>
    </section>


    @include('layouts.team')

    @include('layouts.say')
</main>


@include('clients.about.group')


@endsection