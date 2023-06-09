@extends('layouts.main')
@section('title', 'ASQ-3')
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
                    <li class="breadcrumb-item active" aria-current="page">Thang đo ASQ3</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Breadcrumbs -->
<!-- End Breadcrumbs -->
<section id="pricing" class="pricing">
    <div class="section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Bộ câu hỏi ASQ-3</h2>
    </div>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-content">
                            <p><i class="bi bi-play-circle"></i> Bộ câu hỏi ASQ (Ages and Stages Questionnaires) được sử dụng nhiều trên thể giới với các ngôn ngữ tiếng Ả Rập, tiếng Trung, tiếng Anh, tiếng Pháp, tiếng Tây Ban Nha và tiếng Việt. Hiện nay ASQ phiên bản 3( ASQ3).</p>
                            <p><i class="bi bi-play-circle"></i> Chỉ mất 10-15 phút để phụ huynh hoàn nhận được kết quả sàng lọc ngay.</p>
                            <p><i class="bi bi-play-circle"></i> Nêu bật điểm mạnh của trẻ cũng như mối quan tâm.</p>
                            <p><i class="bi bi-play-circle"></i> Hướng dẫn cha mẹ về sự phát triển của trẻ và kỹ năng của chính con họ.</p>
                            <p><i class="bi bi-play-circle"></i> Làm nổi bật các kết quả nằm trong “vùng nguy hiểm”, để giúp theo dõi trẻ có nguy cơ về rối loạn phát triển.</p>
                            <p><i class="bi bi-play-circle"></i> ASQ-3 được thiết kế để phục vụ các chuyên gia đánh giá sàng lọc phát triển cho trẻ em mầm non, dù họ làm việc ở đâu. </p>
                            <p><i class="bi bi-play-circle"></i> Bộ câu hỏi làm quen là cách hoàn hảo cho các chuyên gia bắt đầu sử dụng với ASQ-3. Được kết hợp với Bộ công cụ, nó bao gồm mọi thứ mà chương trình của bạn cần để sàng lọc trẻ em thành công. </p>
                            <p><i class="bi bi-play-circle"></i> Để phù hợp với nhu cầu riêng của chương trình, bạn cũng có thể đặt hàng các thành phần riêng lẻ từ Bộ khởi động và đào tạo liên tục cho nhân viên của bạn với các Video.</p>
                        </div>
                        <a href="https://checkingcare.vn/gioi-thieu-asq-3/">Xem thêm <i class="bi bi-arrow-right"></i></a>


                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <h3 class="sidebar-title">Bộ công cụ khác</h3>
                        <section id="features" class="features" data-aos="fade-up">
                            <div class="row">
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
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <a href="{{route('clients.ckcare.mchat')}}">
                                        <div class="icon-box">
                                            <i class="bi bi-paint-bucket" style="color: #e361ff;"></i>
                                            <h3>M-CHAT</h3>
                                        </div>
                                    </a>
                                </div>

                                <div class="container d-flex justify-content-center mt-5">
                                    <a href="https://ck.youcare.vn/start/do/2">
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