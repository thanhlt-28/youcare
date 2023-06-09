@section('title', 'Sàng lọc & theo dõi')
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
                    <li class="breadcrumb-item active" aria-current="page">Sàng lọc & theo dõi</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="pricing" class="pricing">

        <div class="section-title">
            <h2 class="text-uppercase">Sàng lọc & theo dõi</h2>
        </div>
        <!-- <section class="section min-vh-50 d-flex flex-column align-items-center justify-content-center">
            <h2>Nội dung đang được xây dựng, vui lòng quay trở lại trang chủ.</h2>
            <a class="btn btn-success rounded-pill text-white" href="{{('/')}}">Trang chủ</a>
            <img src="{{asset('assets/img/not-found.jpg')}}" width="30%" class="img-fluid" alt="Page Not Found">
        </section> -->
        <div class="container mb-5">
            <div class="row">
                <div class="slider-teams d-flex align-items-center justify-content-center">
                    <div class="ck__content">
                        <div class="ck__content_item">
                            <p><b>Sàng lọc và theo dõi:</b> <br>
                                Khi phụ huynh/giáo viên nghi ngờ con/học sinh của mình gặp rối loạn phát triển (như: tự kỷ, tăng động giảm tập trung, chậm nói, chậm phát triển,...) hoặc con gặp các vấn đề về tâm lý (như: trầm cảm, lo âu, thu mình, tự làm hại,...), Bước đầu tiên, phụ huynh/giáo viên sẽ lựa chọn bộ công cụ, thang đo phù hợp có trong ứng dụng CKCare để tiến hành sàng lọc, đánh giá cho các em. CKCare bao gồm có 4 thang đo:</p>

                            <a href="{{route('clients.ckcare.cbcl')}}">
                                <p style="font-weight: 500; color: #67ac2f;"><i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> CBCL: Đánh giá các vấn đề tâm lý dành cho trẻ từ 6 đến 18 tuổi.</p>
                            </a>
                            <p><em> Đánh giá Dựa trên 8 chỉ số:</em>
                                1. Lo âu
                                2. Thu mình/ trầm cảm
                                3. Than phiền cơ thể
                                4. Vấn đề xã hội
                                5. Vấn đề tư duy/ suy nghĩ
                                6. Tập trung chú ý
                                7. Hành vi chống đối xã hội

                                8. Hành vi xâm khích, gây hấn
                            </p>
                            <a href="{{route('clients.ckcare.asq3')}}">
                                <p style="font-weight: 500; color: #67ac2f;"><i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> ASQ3: Giúp sàng lọc sự phát triển của trẻ trong độ tuổi từ 12 -> 66 tháng. ASQ3 đánh giá dựa trên 5 chỉ số:</p>
                            </a>
                            <p> &#8226; Vận động thô</p>
                            <p> &#8226; Vận động tinh</p>
                            <p> &#8226; Cá nhân xã hội</p>
                            <p> &#8226; Giải quyết vấn đề</p>
                            <p> &#8226; Ngôn ngữ</p>

                            <a href="{{route('clients.ckcare.adhd')}}">
                                <p style="font-weight: 500; color: #67ac2f;"><i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> ADHD: giúp đánh giá tăng động - giảm tập trung cho trẻ từ 6 tuổi - 15 tuổi</p>
                            </a>
                            <a href="{{route('clients.ckcare.mchat')}}">
                                <p style="font-weight: 500; color: #67ac2f;"><i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> M - Chat: dùng để sàng lọc rối loạn phổ tự kỷ cho trẻ từ 12 tháng -> 36 tháng</p>
                            </a>

                            <p>Khi nhận được kết quả sàng lọc, phụ huynh/giáo viên sẽ nắm bắt được con/học sinh của mình có đang gặp vấn đề của rối loạn phát triển hoặc vấn đề về tâm lý hay không? Mức độ vấn đề gặp phải. Từ đó, tiếp tục quan sát, theo dõi và có hướng đánh giá chuyên sâu hơn cho học sinh.</p>
                            <p> Chính các em học sinh hoặc giáo viên, người chăm sóc (ít nhất 6 tháng ở cùng các em) tiến hành sàng lọc, theo dõi sức khỏe tinh thần cho học sinh thông qua 2 bộ công cụ được sử dụng trong CKCare – School (ADHD, CBCL). Từ đó, nhà trường sàng lọc được những học sinh nào đang gặp phải vấn đề về sức khỏe tinh thần (trầm cảm, lo âu, thu mình,...), từ đó, tiến tới bước thứ 2.</p>
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
