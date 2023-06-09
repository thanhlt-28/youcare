@extends('layouts.main')
@section('title', 'Tổ chức')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-ckcare"></div>
        <div class="bread-org-school">
            <div class="container">
                <div class="header-hero">
                    <div class="header-hero__slogan">
                        <h2>CKCARE<br />CHO TỔ CHỨC</h2>
                        <div class="header___slogan">
                            <h5>"Không trẻ em nào bị bỏ lại phía sau" <br />Hãy bắt đầu theo dõi & sàng lọc<br /> cho trẻ ngay từ hôm nay!</h5>
                        </div>
                    </div>

                    <div class="header__btn__cta">
                        <a href="https://ck.youcare.vn/user/login" target="_blank">
                            <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="slogan-ckcare">
            <p class="slogan">
                <q>Không trẻ em nào bị bỏ lại phía sau</q>
            </p>
        </div> -->
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_detail')}}">CKCare</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tổ chức</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container">
        <div class="section-title">
            <h2 class="ck_header">CK<span style="color: #67ac2f">CARE</span> TỔ CHỨC LÀ GÌ?</h2>
        </div>
        <div class="container__ckcare">
            <div class="row">
                <div class="col-md-6 slider-teams d-flex justify-content-center">
                    <div class="ck__content">
                        <div class="ck__content_item">
                            <p><span style="color: #67ac2f;"> &#8226; </span> Ngày nay, các tổ chức giáo dục kỹ năng sống, trung tâm đánh giá, tâm lý, bệnh viện ngày càng thu hút được nhiều trẻ, học sinh tới trải nghiệm, thăm khám. Tuy nhiên, với nhiều lý do khác nhau, hoạt động hỗ trợ sàng lọc, đánh giá các vấn đề về rối loạn phát triển cũng như rối nhiễu tâm lý ở trẻ chưa đạt được hiệu quả như mong đợi. Với CKCare, các trung tâm, tổ chức nay đã có bộ công cụ hiệu quả, tiết kiệm nhân lực, thời gian đồng thời gia tăng chất lượng phục vụ. </p>
                            <p><span style="color: #67ac2f;"> &#8226; </span> CKCare cho tổ chức là bộ công cụ giúp đánh giá tình trạng phát triển của trẻ so với lứa tuổi và tình trạng sức khỏe tâm thần cho trẻ em ở độ tuổi từ 1-18 tuổi với độ chính xác cao, hỗ trợ quản lý hiệu quả các đợt, các nhóm đánh giá. Việc ứng dụng CKCare không chỉ giúp trung tâm, tổ chức dễ dàng hơn trong công tác quản lý, tiết kiệm thời gian và nhân lực trong đánh giá mà còn theo dõi sự tiến bộ qua từng lần đánh giá.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-knowledge">
                        <div class="container aos-init aos-animate">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 video-box align-self-baseline position-relative">
                                    <img src="{{asset('assets/img/blog/video-img.jpg')}}" class="img-fluid" alt="">
                                    <a href="https://youtu.be/4nNrp49xWfE" class="glightbox play-btn mb-4"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ck__content_item">
                <p><span style="color: #67ac2f;"> &#8226; </span> CKCare sẽ giúp các trung tâm, tổ chức sàng lọc, đánh giá ra các vấn đề về rối loạn phát triển (tự kỷ, chậm nói, tăng động, giảm tập trung…, cũng như các vấn đề về tâm lý của các em (trầm cảm, lo âu, thu mình, tự làm hại mình, chống đối,...) chỉ với chiếc điện thoại thông minh, máy tính bảng hoặc máy tính cá nhân.</p>
                <p><span style="color: #67ac2f;"> &#8226; </span> CKCare được ứng dụng rộng rãi cho các trung tâm, tổ chức có các em đến thăm khám trong độ tuổi từ 12 tháng - 18 tuổi.</p>

                <p><span style="color: #67ac2f;"> &#8226; </span> CKCare bao gồm 4 bộ công cụ, mỗi bộ công cụ sẽ phù hợp với từng độ tuổi và vấn đề con đang gặp phải, cụ thể:</p>

                <a href="{{route('clients.ckcare.asq3')}}">
                    <p style="font-style: italic; font-weight: 500;"><span style="color: #67ac2f;"> &#8226; </span> ASQ3: Đánh giá sự phát triển của trẻ trong độ tuổi từ 12 tháng - 66 tháng.</p>
                </a>
                <a href="{{route('clients.ckcare.adhd')}}">
                    <p style="font-style: italic; font-weight: 500;"><span style="color: #67ac2f;"> &#8226; </span> ADHD: Đánh giá tăng động giảm chú ý cho trẻ, có 2 phiên bản: dành cho trẻ từ 0 - 6 tuổi và dành cho các trẻ từ 6 tuổi - 15 tuổi .</p>
                </a>
                <a href="{{route('clients.ckcare.mchat')}}">
                    <p style="font-style: italic; font-weight: 500;"><span style="color: #67ac2f;"> &#8226; </span> M - Chat: Đánh giá các biểu hiện liên quan đến rối loạn phổ tự kỷ cho trẻ, trong độ tuổi từ 12 tháng - 36 tháng.</p>
                </a>
                <a href="{{route('clients.ckcare.cbcl')}}">
                    <p style="font-style: italic; font-weight: 500;"><span style="color: #67ac2f;"> &#8226; </span> CBCL: Đánh giá các vấn đề liên quan đến tâm lý, sức khỏe tâm thần của các học sinh (lo âu, trầm cảm, thu mình, chống đối xã hội,...) trong độ tuổi từ 6 - 18 tuổi.</p>
                </a>
                <p><span style="color: #67ac2f;"> &#8226; </span> Các bộ công cụ trên đã được sử dụng rộng rãi trên thế giới và được chuẩn hóa phù hợp với trẻ em Việt Nam, chính vì thế, cả 4 bộ công cụ trên đảm bảo độ tin cậy rất cao.</p>
                <p><span style="color: #67ac2f;"> &#8226; </span> Quản lý trung tâm, tổ chức dựa vào độ tuổi, vấn đề trẻ, học sinh đang gặp khó khăn để lựa chọn bộ công cụ phù hợp để sàng lọc, đánh giá cho trẻ đang học tập, sinh hoạt tại trung tâm mình.</p>
                <p><span style="color: #67ac2f;"> &#8226; </span> Việc phát hiện sớm các vấn đề chậm trễ, khó khăn của trẻ giúp trung tâm hỗ trợ trẻ trong trị liệu - can thiệp và có tỷ lệ trị liệu-can thiệp thành công cao hơn. Thành công từ hoạt động đánh giá, trị liệu, can thiệp giúp xây dựng uy tín và đảm bảo chất lượng của trung tâm, giúp trung tâm, tổ chức xây dựng vị thế trong ngành.</p>
            </div>
        </div>
    </div>



    @include('layouts.ck_detail.ck_tabs')



    @include('layouts.team')
    @include('layouts.say')
</main>

@include('layouts.video_source')


@endsection