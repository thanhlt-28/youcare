@extends('layouts.main')
@section('title', 'Video')
@section('content')

<main id="main-media">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="bread-media"> </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Video</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ========Section Video========= -->
    <section id="about" class="about-knowledge">
        <div class="container" data-aos="fade-in">
            <div data-aos="fade-in">
                <h3 class="text-center text-uppercase">VIDEO CKCARE</h3>
            </div>
            <div class="row">
                <div class="row justify-content-end mt-5">
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h6>HƯỚNG DẪN GIÁO VIÊN SỬ DỤNG BỘ CÔNG CỤ ĐÁNH GIÁ & SÀNG LỌC</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/blog/PH.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/4tiag3PI6I0" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h6>HƯỚNG DẪN PHỤ HUYNH SỬ DỤNG BỘ CÔNG CỤ ĐÁNH GIÁ & SÀNG LỌC</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/blog/CN.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/JK0AAtEsu6M" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h6>HƯỚNG DẪN CÁ NHÂN SỬ DỤNG BỘ CÔNG CỤ ĐÁNH GIÁ & SÀNG LỌC</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/blog/NQL.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/CUTzrA5yx38" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h6>HƯỚNG DẪN NHÀ QUẢN LÝ SỬ DỤNG BỘ CÔNG CỤ ĐÁNH GIÁ & SÀNG LỌC</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/blog/YOUCARE.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/JTdorN7Belk" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h6>HƯỚNG DẪN NGƯỜI DÙNG NỀN TẢNG CHĂM SÓC SỨC KHỎE TINH THẦN TOÀN DIỆN</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/blog/banner-asq-3.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/Ejw-9R9UvxE" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h6>10 PHÚT ĐỂ HIỂU TRẺ - CHIA SẺ SỬ DỤNG PHẦN MỀM THANG ĐO ASQ-3</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========End Section Video========= -->


    @include('clients.about.group')

</main>
@endsection