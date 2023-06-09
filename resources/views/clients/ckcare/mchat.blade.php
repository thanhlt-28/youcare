@extends('layouts.main')
@section('title', 'M-CHAT')
@section('content')


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
                    <li class="breadcrumb-item active" aria-current="page">Thang đo M-Chat</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Breadcrumbs -->
<section id="pricing" class="pricing">

    <div class="section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Thang đo M-Chat</h2>
    </div>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-content">
                            <p><i class="bi bi-play-circle"></i> M-CHAT – bảng kiểm tự kỷ dành cho trẻ nhỏ – là một công cụ có giá trị sàng lọc trẻ em từ 16 đến 30 tháng tuổi nhằm đánh giá nguy cơ mắc phải các rối loạn phổ tự kỷ.
                            </p>
                            <p><i class="bi bi-play-circle"></i> Bảng kiểm gồm 20 câu, trong đó có 11 câu quan trọng được in đậm, được thực hiện bởi người chăm sóc cha/mẹ hoặc ông/bà… dưới sự hướng dẫn của cán bộ y tế.</p>
                            <p><i class="bi bi-play-circle"></i> M-CHAT được giới thiệu bởi nhiều tổ chức có uy tín như Tổ chức Tự kỷ lên tiếng, Trung tâm phòng chống dịch bệnh Mỹ và sử dụng rộng rãi trên thế giới.</p>
                            <p><i class="bi bi-play-circle"></i> Rối loạn phổ tự kỷ là một dạng khuyết tật ảnh hưởng đến chức năng hoạt động của não, tồn tại suốt đời, thường xuất hiện trước 3 tuổi. Việc phát hiện sớm sớm, can thiệp sớm là điều rất quan trọng, là một trong những yếu tố quyết định mức độ hòa nhập của các con. Vậy ai là người phát hiện giúp sàng lọc chẩn đoán sớm?
                            </p>
                            <p><i class="bi bi-play-circle"></i> Một trong những công cụ sàng lọc trẻ tựu kỉ được sử dụng phổ biến đó là bảng sàng lọc M – CHAT.</p>

                        </div>
                        <a href="https://checkingcare.vn/m-chart/">Xem thêm <i class="bi bi-arrow-right"></i></a>


                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <h3 class="sidebar-title">Bộ công cụ khác</h3>
                        <section id="features" class="features" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <a href="{{route('clients.ckcare.asq3')}}">
                                        <div class="icon-box">
                                            <i class="bi bi-shop" style="color: #e80368;"></i>
                                            <h3>ASQ-3</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <a href="{{route('clients.ckcare.cbcl')}}">
                                        <div class="icon-box">
                                            <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                                            <h3>CBCL</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <a href="{{route('clients.ckcare.adhd')}}">
                                        <div class="icon-box">
                                            <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                                            <h3>ADHD</h3>
                                        </div>
                                    </a>
                                </div>

                                <div class="container d-flex justify-content-center mt-5">
                                    <a href="https://ck.youcare.vn/start/do/4">
                                        <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->
            </div>
        </div>
    </section><!-- End Blog Single Section -->

    @include('layouts.ck_detail.ck_tabs')
    @include('layouts.team')

    @include('layouts.say')

</section>

@endsection