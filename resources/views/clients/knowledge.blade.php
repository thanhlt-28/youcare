@extends('layouts.main')
@section('page-title', 'Thông tin thanh toán')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h1 class="text-uppercase mb-3">Kiến thức</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kiến thức</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ========Tabs========= -->
    <section class="knowledge" data-aos="fade-in">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">Chuyên mục:</h5> -->

                    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <p class="card-title mt-2"><strong>Chuyên mục:</strong></p>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 active" id="all-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-all" type="button" role="tab" aria-controls="all" aria-selected="true">Tất cả</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="knowledge-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-knowledge" type="button" role="tab" aria-controls="knowledge" aria-selected="false">Kiến thức cơ bản</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="knowledges-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-knowledges" type="button" role="tab" aria-controls="knowledges" aria-selected="false">Kiến thức nâng cao</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div class="tab-pane fade show active" id="bordered-justified-all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="card mb-3" style="max-width: 1280px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="server/assets/img/product-1.jpg" class="img-fluid rounded-start" width="50%" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. 1</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-knowledge" role="tabpanel" aria-labelledby="knowledge-tab">
                            <div class="card mb-3" style="max-width: 1280px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="server/assets/img/product-2.jpg" class="img-fluid rounded-start" width="50%" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. 2</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-knowledges" role="tabpanel" aria-labelledby="knowledges-tab">
                            <div class="card mb-3" style="max-width: 1280px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="server/assets/img/product-3.jpg" class="img-fluid rounded-start" width="50%" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. 3</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
    <!-- ========End Tabs========= -->

    <!-- ========Section Video========= -->
    <section id="about" class="about-knowledge">
        <div class="container" data-aos="fade-in">
            <div data-aos="fade-in">
                <h3 class="text-center text-uppercase">Video chia sẻ</h3>
            </div>
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
    <!-- ======= Cộng đồng ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">

            <div class="text-center">
                <h3>Cộng đồng</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Tham gia ngay</a>
            </div>

        </div>
    </section>
    <!--===== End CĐ Section ======-->

    <!-- =====Footer-Contact======== -->
    <section id="contact" class="contact-ft">
        <div class="container">
            <div class="row">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info-ft">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Địa chỉ/ Location:</h4>
                            <p>- Tầng 7, 59 Võ Chí Công, Cầu Giấy, Hà Nội</p>
                            <p>- 7th floor, 59 Vo Chi Cong street, <br>Cau Giay District, Ha Noi</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>lienhe@braincare.vn</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Hotline:</h4>
                            <p>(024) 4455 3307</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
                    <section id="contact" class="content-section">
                        <div id="map">
                            <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d476614.106305572!2d105.804103!3d21.050776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab226a78d97b%3A0xfa288a20a51995a7!2zVOG6p25nIDcsIDU5IFbDtSBDaMOtIEPDtG5nLCBOZ2jEqWEgxJDDtCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1621176139857!5m2!1svi!2sus" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- =====Footer-Contact======== -->


</main>

@endsection