@extends('layouts.main')
@section('title', 'Sản phẩm')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-prod">
            <div class="container">
                <div class="header-hero">
                        <a href="{{route('clients.contact')}}">
                            <button type="button" class="btn btn-outline-success rounded-pill">
                                <i class="bx bx-phone-call"></i> Liên hệ tư vấn</button>
                        </a>
                </div>
            </div>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 1</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.hrm.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ứng dụng ChkCare</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('clients.platform.chkcare_detail')}}" class="btn-buy">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 2</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.info.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ứng dụng PubCare</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="{{route('clients.platform.prod_2')}}" class="btn-buy">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 3</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.sales.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ứng dụng PsyCare</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('clients.platform.prod_3')}}" class="btn-buy">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 4</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.work.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Ứng dụng BizCare</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('clients.platform.prod_4')}}" class="btn-buy">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Tính năng vượt trội</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                    quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card" style="background-image: url(/assets/img/features-1.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Mission</a></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up">
                    <div class="card" style="background-image: url(/assets/img/features-2.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Plan</a></h5>
                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="background-image: url(/assets/img/features-3.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Vision</a></h5>
                            <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="background-image: url(/assets/img/features-4.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Care</a></h5>
                            <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-header left">
                        <h2>Câu hỏi thường gặp</h2>
                    </div>
                    <img src="{{asset('assets/img/footer-bg.png')}}" alt="Image">
                </div>
                <div class="col-md-7">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#" aria-expanded="true">
                                    <span>1</span> Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua?
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>2</span> Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua?
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>3</span> Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua?
                                </a>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>4</span> Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua?
                                </a>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>5</span> Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua?
                                </a>
                            </div>

                        </div>
                    </div>
                    <a class="btn" href="{{route('clients.contact')}}">Bạn có thể hỏi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box">
                        <i class="bi bi-shop" style="color: #ffbb2c;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                        <h3><a href="">Bài tests</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class="bi bi-paint-bucket" style="color: #e361ff;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-clipboard-data" style="color: #47aeff;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-text-paragraph" style="color: #ffa76e;"></i>
                        <h3><a href="">Bài testr</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-card-list" style="color: #11dbcf;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-pie-chart" style="color: #4233ff;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-type-underline" style="color: #b2904f;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-disc" style="color: #b20969;"></i>
                        <h3><a href="">Bài testl</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-hdd-stack" style="color: #ff5828;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="bi bi-filter-circle" style="color: #29cc61;"></i>
                        <h3><a href="">Bài test</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

</main>
@endsection