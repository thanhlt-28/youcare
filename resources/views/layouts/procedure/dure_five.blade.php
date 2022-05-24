@section('title', 'Quy trình nhà chuyên môn')
@section('content')
@extends('layouts.main')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-procedure">
            <div class="container-wraper">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 p-5">
                        <div class="about-knowledge">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-10 video-box align-self-baseline position-relative">
                                    <div class="border border-secondary rounded-3 shadow p-3 mb-5 bg-body rounded">
                                        <img src="assets/img/blog/NCM.png" class="img-fluid" alt="">
                                        <a href="https://youtu.be/CUTzrA5yx38" class="glightbox play-btn"></a>
                                        <div class="box-text text-center pt-3">
                                            <h6>HD NHÀ CHUYÊN MÔN SỬ DỤNG BỘ CÔNG CỤ ĐÁNH GIÁ & SÀNG LỌC</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.ckcare_detail')}}">Quy trình</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quy trình nhà chuyên môn</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Tab Section ======= -->
    <section class="main-procedure" data-aos="fade-up">
        <div class="container">

            <!-- Accordion quy trình -->
            <div class="col-lg-12">
                <div class="card-body">
                    <h3 class="card-title mt-1 mb-3">Quy trình đánh giá & sàng lọc dành cho nhà chuyên môn</h3>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px;">
                                    <b> Bước 1: Chuẩn bị sàng lọc </b>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="login">
                                            <div class="accordion-body">
                                                <b>1. Đăng kí/ đăng nhập</b>
                                                <p>
                                                    • Người dùng truy cập đường link <a href="https://ck.youcare.vn/user/register" target="_blank">Đăng ký /</a> <a href="https://ck.youcare.vn/user/login" target="_blank">Đăng nhập</a> trên trình duyệt web
                                                    có kết nối Internet <br>
                                                    • Nhập thông tin đăng ký/ đăng nhập
                                                </p>
                                                <b>2. Nhập thông tin trẻ</b>
                                                <br>
                                                <p>
                                                    • Chuyên gia nhập thông tin trẻ tại menu “Quản lý trẻ em”. </br>
                                                    • Thông qua thông tin của trẻ, hệ thống sẽ tự động hỗ trợ đề xuất những bài đánh giá phù hợp độ tuổi.
                                                </p>

                                                <b>3. Thực hiện sàng lọc</b>
                                                <br>
                                                <b>Bấm vào menu “Bộ công cụ” và lựa chọn thang đo phù hợp:</b>
                                                <br />
                                                <div class="mt-2">
                                                    <i class="bi bi-check"></i> <i>Sàng lọc CBCL </i> <br />
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        &nbsp;&nbsp;Dành cho trẻ có độ tuổi từ 6-18 tuổi nhận biết các vấn đề tâm lý rối nhiễu, cảm xúc hành vi: <br />
                                                    </div>
                                                    <br>
                                                    <div class="col-md-4">
                                                        • Lo âu trầm cảm <br />
                                                        • Thu mình, cô đơn <br />
                                                    </div>
                                                    <div class="col-md-4">
                                                        • Cơ thể, thể chất <br />
                                                        • Xã hội, mỗi quan hệ <br />
                                                    </div>
                                                    <div class="col-md-4">
                                                        • Suy nghĩ, nhận thức <br />
                                                        • Tập trung, chú ý <br />
                                                    </div>
                                                    <div class="col-md-4">
                                                        • Hành vi say phạm (chống đối) <br />
                                                    </div>
                                                    <div class="col-md-4">
                                                        • Hành vi thái quá (hung tính) <br />
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <i class="bi bi-check"></i> <i>Sàng lọc ASQ-3</i> <br />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        • Dành cho trẻ từ 01 tháng đến 5 tuổi rưỡi (66 tháng) <br />
                                                        • Đánh giá chuyển sâu để có những hỗ trợ tốt cho trẻ <br />
                                                    </div>
                                                    <div class="col-md-6">
                                                        • Giúp sàng lọc các vấn đề liên quan đến trẻ mầm non phát hiện sớm các lĩnh vực trẻ phát triển chậm hơn so với độ tuổi <br />
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <i class="bi bi-check"></i> <i>Đánh giá Tăng động – Giảm tập trung Vanderbilt</i> <br />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        • Thang có phiên bản cho trẻ 0 - 6 tuổi và 6 - 12 tuổi <br />
                                                        • Biết được rối loạn phát triển thần kinh liên quan đến vấn đề tăng động giảm tập trung của trẻ <br />
                                                    </div>
                                                </div>

                                                <div class="mt-2">
                                                    <i class="bi bi-check"></i> <i>Sàng lọc M-CHAT-R</i> <br />
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        • Dành cho độ tuổi từ 0 - 36 tháng <br />
                                                        • Giúp sàng lọc về các vấn đề rối loạn phổ tự kỷ xem trẻ có nguy cơ mắc bệnh tự kỷ hay không
                                                    </div>
                                                </div>

                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px;">
                                    <b> Bước 2: Thực hiện đánh giá </b>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="hdsd">
                                            <div class="accordion-body">
                                                <b>1. Hướng dẫn và đọc kĩ hướng dẫn</b>
                                                <p>
                                                    • Chuyên gia lưu ý đọc và giải thích, hướng dẫn rõ ràng với thân chủ về bài đánh giá / sàng lọc trước khi thực hiện bài test.<br>
                                                    <i>Lưu ý những thông tin:</i><br>
                                                    • Đối tượng thực hiện bài test (PH, GV, HS, độ tuổi của HS)<br>
                                                    • Giới hạn thời gian<br>
                                                    • Cách lựa chọn mức điểm cho từng câu hỏi.<br>
                                                    <i>• Lưu ý: Không nên cân nhắc câu trả lời quá lâu vì điều này có thể gây ảnh hưởng tới độ chính xác của kết quả.</i>
                                                </p>

                                                <b>2. Thực hiện đánh giá/ sàng lọc</b>
                                                <p>
                                                    • Với những bài đánh giá được thực hiện bởi thân chủ, nhà chuyên môn hỗ trợ để đảm bảo thân chủ hiểu rõ các mệnh đề, đồng thời thu thập thêm thông tin.<br>
                                                    • Thân chủ có thể đánh giá các vấn đề không chính xác so với thực tế (nhẹ hơn hoặc nặng hơn). <br>
                                                    • Nhà chuyên môn cần chú ý quan sát và sử dụng kỹ năng lâm sàng để đảm bảo thu được thông tin chính xác.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px;">
                                    <b> Bước 3: Nhận kết quả </b>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="result">
                                            <div class="accordion-body">
                                                <b>Nhận kết quả</b>
                                                <br>
                                                Sau khi nhận kết quả, nhà chuyên môn có thể lựa chọn "Tải về" để trực tiếp lưu trữ kết quả trong máy, hoặc nhận kết quả thông qua email.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 18px;">
                                    <b> Bước 4: Hỗ trợ chuyên sâu </b>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="hd">
                                            <div class="accordion-body">
                                                <b>Nếu gặp các khó khăn trong quá trình thao tác ứng dụng, nhà chuyên môn có thể liên hệ Trung tâm Braincare để được tư vấn kỹ và hỗ trợ kỹ thuật.
                                                </b>
                                                <br>
                                                • Đối với trẻ từ dưới 6 tuổi cần hỗ trợ vui lòng truy cập <a href="https://checkingcare.vn/" target="_blank">checkingcare.vn </a> để biết thêm chi tiết<br>

                                                • Đối với trẻ từ 6-18 tuổi vui lòng truy cập <a href="https://phongkhamtamly.com/" target="_blank">phongkhamtamly.com </a> để biết thêm chi tiết<br>
                                                • Địa chỉ: Tầng 7, Toà nhà 59 Võ Chí Công, P. Nghĩa Đô, Q. Cầu Giấy, Tp. Hà Nội, Việt Nam <br>
                                                • Tổng đài tư vấn: <a href="tel:1900 3307">1900 3307</a> hoặc hotline: <a href="tel:(024) 4455 3307">(024) 4455 3307</a><br>
                                                • Email: <a href="mailto:lienhe@braincare.vn">lienhe@braincare.vn</a> <br>
                                                • Website: <a href="https://braincare.vn/" target="_blank">braincare.vn </a>-
                                                <a href="https://checkingcare.vn/" target="_blank">checkingcare.vn </a>-
                                                <a href="https://phongkhamtamly.com/" target="_blank">phongkhamtamly.com </a>-
                                                <a href="https://phongkhamtamthan.com/" target="_blank">phongkhamtamthan.com </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Default Accordion Example -->
                </div>
            </div>
        </div>
    </section>

    <!-- =========Next Procedure======== -->
    <section id="features" class="features" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex align-item-start" href="{{route('layouts.procedure.dure_four')}}">
                        <div class="icon-box">
                            <i class="bi bi-arrow-left-circle-fill" style="color: #94c045;"></i>
                            <h3>Dành cho nhà quản lý &nbsp;</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.dure_once')}}">
                        <div class="icon-box">
                            <h3>Dành cho giáo viên &nbsp;</h3>
                            <i class="bi bi-arrow-right-circle-fill" style="color: #94c045;"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.slider_team')
    @include('clients.about.group')

    <section id="contact" class="contact-ft">
        <div class="container">
            <div class="row mt-5">

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

</main>
<!-- End #main -->

@endsection