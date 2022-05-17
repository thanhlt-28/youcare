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
                            <i class="bx bx-phone-call"></i> Liên hệ tư vấn
                        </button>
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
                    <div class="box feature" data-aos="fade-up">
                        <!-- <h3>San Pham 1</h3> -->
                        <a href="{{route('clients.platform.ckcare_detail')}}">
                            <div style="border: none;" class="card h-100">
                                <img class="card-img-top" src="/assets/img/work/pack.hrm.svg" width="50%" alt="">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Ứng dụng CKCare</h5>
                                    <p class="text-flow card-text text-dark">
                                        CKCare là sản phẩm công nghệ
                                        được ứng dụng trong việc theo...
                                    </p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.platform.ckcare_detail')}}" class="btn-buy">Xem thêm</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-12">
                    <div class="box feature" data-aos="fade-up">
                        <!-- <h3>San Pham 2</h3> -->
                        <a href="{{route('clients.platform.pubcare')}}">
                            <div style="border: none;" class="card h-100">
                                <img class="card-img-top" src="/assets/img/work/pack.info.svg" width="50%" alt="">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Ứng dụng PubCare</h5>
                                    <p class="text-flow card-text text-dark">
                                        PubCare là sản phẩm công nghệ được
                                        ứng dụng vào việc sàng...
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('clients.platform.pubcare')}}" class="btn-buy">Xem thêm</a>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="box feature" data-aos="fade-up">
                        <!-- <h3>San Pham 4</h3> -->
                        <a href="{{route('clients.platform.bizcare')}}">
                            <div style="border: none;" class="card h-100">
                                <img class="card-img-top" src="/assets/img/work/pack.work.svg" width="50%" alt="">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Ứng dụng BizCare</h5>
                                    <p class="text-flow card-text text-dark">
                                        BizCare là sản phẩm công nghệ được
                                        ứng dụng vào doanh...
                                    </p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.platform.bizcare')}}" class="btn-buy">Xem thêm</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="box feature" data-aos="fade-up">
                        <!-- <h3>San Pham 4</h3> -->
                        <a href="{{route('clients.platform.bizcare')}}">
                            <div style="border: none;" class="card h-100">
                                <img class="card-img-top" src="/assets/img/work/pack.work.svg" width="50%" alt="">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Ứng dụng PsyCare</h5>
                                    <p class="text-flow card-text text-dark">
                                        PsyCare là nền tảng tham vấn và trị liệu
                                        cá vấn đề về tâm lý và...
                                    </p>
                                </div>
                                <div class="btn-wrap">
                                    <a href="{{route('clients.platform.psycare')}}" class="btn-buy">Xem thêm</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- End Pricing Section -->


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
                                    <span>1</span> ASQ-3 có thể được dùng để sàng lọc tự kỷ?
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>2</span> Nếu kết quả M - CHAT của con tôi là “nguy cơ tự kỷ trung bình” hoặc “nguy cơ tự kỷ cao” tôi có thể tìm đến đâu?
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>3</span> Sử dụng công cụ CBCL để đánh giá cho đối tượng nào?

                                </a>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>4</span> Thang CBCL đánh giá các hội chứng, lĩnh vực nào?
                                </a>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#">
                                    <span>5</span> Mất bao lâu để hoàn thành?
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
                    <a href="https://checkingcare.vn/sang-loc-theo-doi/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-shop" style="color: #ffbb2c;"></i>
                            <h3>ASQ-3</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <a href="https://checkingcare.vn/cbcl/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                            <h3>CBCL</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <a href="https://checkingcare.vn/cham-noi/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                            <h3>CHẬM NÓI</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <a href="https://checkingcare.vn/m-chart/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-paint-bucket" style="color: #e361ff;"></i>
                            <h3>M-CHAT-R</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/raven/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-card-list" style="color: #11dbcf;"></i>
                            <h3>RAVEN</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/epi/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-pie-chart" style="color: #4233ff;"></i>
                            <h3> EPI</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/adhd/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-type-underline" style="color: #b2904f;"></i>
                            <h3>ADHD</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/mbti/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-disc" style="color: #b20969;"></i>
                            <h3> MBTI</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/disc/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-hdd-stack" style="color: #ff5828;"></i>
                            <h3>DISC</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/danh-gia-tram-cam-beck/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-filter-circle" style="color: #29cc61;"></i>
                            <h3>BECK</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/danh-gia-roi-loan-lo-au-zung/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-text-paragraph" style="color: #ffa76e;"></i>
                            <h3>ZUNG</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/danh-gia-tong-hop-dass21/" target="_blank">
                        <div class="icon-box">
                            <i class="bi bi-clipboard-data" style="color: #47aeff;"></i>
                            <h3>DASS21</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->

</main>
@endsection