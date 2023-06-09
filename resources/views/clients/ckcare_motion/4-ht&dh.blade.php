@section('title', 'Hỗ trợ & đồng hành')
@section('content')
@extends('layouts.main')

<main id="main">
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
                    <li class="breadcrumb-item active" aria-current="page">Hỗ trợ & đồng hành</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">

        <div class="section-title">
            <h2 class="text-uppercase">Hỗ trợ & đồng hành</h2>
        </div>
        <!-- <section class="section min-vh-50 d-flex flex-column align-items-center justify-content-center">
            <h2>Nội dung đang được xây dựng, vui lòng quay trở lại trang chủ.</h2>
            <a class="btn btn-success rounded-pill text-white" href="{{('/')}}">Trang chủ</a>
            <img src="{{asset('assets/img/not-found.jpg')}}" width="30%" class="img-fluid" alt="Page Not Found">
        </section> -->

        <div class="container mb-3">
            <div class="row">
                <div class="col-md-6 slider-teams d-flex align-items-center justify-content-center">
                    <div class="ck__content">
                        <div class="ck__content_item">
                            <p><b style="font-weight: 500; color: #67ac2f;">Chúng tôi gọi đây là “gói đồng hành”.</b></p>
                            <p> Sau quá trình can thiệp, trị liệu, nhà trường/tổ chức/phụ huynh/các em có thể tiếp tục sử dụng gói đồng hành với YouCare.</p>
                            <p> &#8226; Với nhà trường, các chuyên gia Youcare giàu kinh nghiệm là các Tiến sĩ, Thạc sĩ sẽ hỗ trợ, đồng hành cùng nhà trường trong quá trình xây dựng và triển khai các chương trình phòng ngừa đồng thời tư vấn xây dựng các chương trình phát triển toàn diện cho học sinh. Việc xây dựng các chương trình trên giúp thầy cô giảm tối đa thời gian phải tự loay hoay đi tìm giải pháp và là cơ sở, tiền đề để xây dựng trường học hạnh phúc mỗi ngày.</p>
                            <p> &#8226; Bên cạnh đó, các chuyên gia YouCare sẽ xây dựng các hoạt động ngoại khóa, các buổi chia sẻ về hoạt động nâng cao giá trị cho nhà trường, từ đó, giúp gia tăng hiệu quả kết nối giữa nhà trường-phụ huynh-học sinh.</p>
                            <p> &#8226; YouCare sẽ đồng hành, hỗ trợ, định hướng cho phụ huynh và học sinh, giúp các em tìm thấy giá trị sống để tích cực hơn mỗi ngày.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-knowledge">
                        <div class="container aos-init aos-animate">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 video-box align-self-baseline position-relative">
                                    <img src="{{asset('assets/img/blog/video-img.jpg')}}" class="img-fluid" alt="">
                                    <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('layouts.team')
    @include('layouts.say')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</main>

<!-- End #main -->

@endsection
