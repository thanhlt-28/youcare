@extends('layouts.main')
@section('title', 'Video')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h1 class="text-uppercase mb-3">Video</h1>
                </div>
            </div>
        </div>
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
            <!-- <div data-aos="fade-in">
                <h3 class="text-center text-uppercase">Video</h3>
            </div> -->
            <div class="row">
                <div class="row justify-content-end">
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/danhgia.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/A67rHCURVaE" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h5>Theo dõi & đánh giá sự phát triển cho trẻ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/danhgia.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/A67rHCURVaE" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h5>Theo dõi & đánh giá sự phát triển cho trẻ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 video-box align-self-baseline position-relative">
                                <img src="assets/img/danhgia.png" class="img-fluid" alt="">
                                <a href="https://youtu.be/A67rHCURVaE" class="glightbox play-btn mb-4"></a>
                            </div>
                            <div class="col-inner">
                                <div class="box-text text-center pt-3">
                                    <h5>Theo dõi & đánh giá sự phát triển cho trẻ</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ========End Section Video========= -->

</main>
@endsection