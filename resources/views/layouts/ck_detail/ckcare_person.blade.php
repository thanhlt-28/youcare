@extends('layouts.main')
@section('title', 'Cá nhân')
@section('content')

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

<div class="container aos-init aos-animate">
    <div class="container-fluild">
        <div class="person__card">
            <div class="person__card__hd">
                <div class="section-title">
                    <h2 class="ck_header">VIDEO TRUYỀN THÔNG - SỰ KIỆN</h2>
                </div>
                <!-- video main -->
                <div class="row row-cols-1 row-cols-md-3 g-2">
                    <div class="col-md-8">
                        <div class="about-knowledge">
                            <div class="container aos-init aos-animate">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 video-box align-self-baseline position-relative">
                                        <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                        <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                    </div>
                                </div>
                                <div class="col-inner">
                                    <div class="box-text pt-3">
                                        <h6>HƯỚNG DẪN GIÁO VIÊN SỬ DỤNG BỘ CÔNG CỤ ĐÁNH GIÁ &amp; SÀNG LỌC</h6>
                                        <time>20 thg 6, 2022</time>
                                        <p class="box-text-graph">
                                            BrainCare hướng tới trở thành một trong những đơn vị dẫn đầu về lĩnh vực chăm sóc sức khoẻ tinh thần tại Việt Nam, làm thay đổi thói quen và nhận thức của người Việt Nam trong việc chú trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- video right -->
                    <div class="container_wrapper">
                        <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                            <div class="carousel-inner" role="listbox">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4"></div>
                                    <div class="col-lg-4 col-md-4"></div>
                                    <div class="col-lg-4 col-md-4"></div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="row row-cols-1 row-cols-md-1 g-1">
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 1</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 2</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row row-cols-1 row-cols-md-1 g-1">
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 3</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 4</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row row-cols-1 row-cols-md-1 g-1">
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 5</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 6</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a style="color:#5a5454; font-size: 35px;" class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                                    <span class="carousel-control-prev-icon"><i class="bi bi-chevron-left"></i></span>
                                </a>
                                <a style="color:#5a5454; font-size: 35px;" class="carousel-control-next" href="#testimonial4" data-slide="next">
                                    <span class="carousel-control-next-icon"><i class="bi bi-chevron-right"></i></span>
                                </a> -->
                        </div>
                    </div>

                    <!-- video mobile -->
                    <div class="container_mobile">
                        <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                            <div class="carousel-inner" role="listbox">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4"></div>
                                    <div class="col-lg-4 col-md-4"></div>
                                    <div class="col-lg-4 col-md-4"></div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="row row-cols-2 row-cols-md-1 g-1">
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 1</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 2</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row row-cols-2 row-cols-md-1 g-1">
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 3</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 4</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row row-cols-2 row-cols-md-1 g-1">
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 5</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col pre__box">
                                            <div class="about-knowledge">
                                                <div class="container aos-init aos-animate">
                                                    <div class="row">
                                                        <div class="col-lg-12 video-box align-self-baseline position-relative">
                                                            <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                                            <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                                        </div>
                                                        <div class="col-inner">
                                                            <div class="box-text pt-3">
                                                                <h6>Bộ công cụ: ĐÁNH GIÁ &amp; SÀNG LỌC 6</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a style="color:#5a5454; font-size: 35px;" class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                                <span class="carousel-control-prev-icon"><i class="bi bi-chevron-left"></i></span>
                            </a>
                            <a style="color:#5a5454; font-size: 35px;" class="carousel-control-next" href="#testimonial4" data-slide="next">
                                <span class="carousel-control-next-icon"><i class="bi bi-chevron-right"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.say')


@include('clients.about.group')


@endsection