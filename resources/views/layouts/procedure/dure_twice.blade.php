@section('title', 'Quy trình phụ huynh')
@section('content')
@extends('layouts.main')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero" style="
            background-image: url(../assets/img/banner-procedure.png);
            background-repeat: no-repeat;
            background-size: cover;
            height: 55vh;
        ">
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.ckcare_detail')}}">Quy trình</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quy trình phụ huynh</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Tab Section ======= -->
    <section class="main-content" data-aos="fade-up">
        <div class="container">
            <div class="col-lg-12 mt-5">

                <div class="card">
                    <div class="card-body">
                        <!-- Accordion without outline borders -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Bước 1: Đăng kí/ Đăng nhập
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <b>Đăng kí</b>
                                        <p>
                                            • Người dùng truy cập đường link <a href="https://app.checkingcare.vn/user/register" target="_blank">https://app.checkingcare.vn/user/register</a> trên trình duyệt web
                                            có kết nối Internet
                                        </p>
                                        <p>
                                            • Nhập thông tin Đăng ký / Đăng nhập và chọn quyền Phụ huynh
                                        <p>
                                            • Bấm Đăng ký
                                        </p>

                                        <b>Đăng nhập</b>
                                        <p>
                                            • Người dùng truy cập đường link: <a href="https://app.checkingcare.vn/user/login" target="_blank">https://app.checkingcare.vn/user/login</a> trên trình duyệt kết nối
                                            internet
                                        </p>
                                        <p>
                                            • Nhập thông tin Đăng nhập hoặc Đăng nhập thông qua Facebook / Google
                                        </p>
                                        <p>
                                            • Bấm đăng nhập
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Bước 2: Nhập thông tin trẻ
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        • GV nhập thông tin trẻ tại menu “Quản lý trẻ em”. </br>
                                        • Thông qua thông tin của trẻ, hệ thống sẽ tự động hỗ trợ đề xuất những bài đánh giá phù hợp độ tuổi.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Bước 3: Thực hiện đánh giá
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <b>Thêm trẻ</b>
                                        <p>
                                            • Người dùng bấm vào menu “Quản lý trẻ em” hệ thống hiển thị màn hình:
                                        </p>
                                        <p>
                                            • Người dùng thực hiện các bước sau: <b> <i> B1. Click vào “Thêm”</i>
                                                <i class="bi bi-arrow-right"> B2. Nhập đầy đủ thông tin trẻ </i>
                                                <i class="bi bi-arrow-right"> B3. Click thêm</i></b>
                                        </p>
                                        <b>Lựa chọn bộ công cụ</b>
                                        <br />
                                        Bấm vào menu “Bộ công cụ” hệ thống hiển thị màn hình các bộ công cụ gồm:
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
                                            <div class="col-md-4">
                                                • Dành cho trẻ từ 12 tháng đến 6 tuổi <br />
                                                • Đánh giá chuyển sâu để có những hỗ trợ tốt cho trẻ <br />
                                            </div>
                                            <div class="col-md-4">
                                                • Giúp sàng lọc các vấn đề liên quan đến trẻ mầm non phát hiện sớm các lĩnh vực trẻ phát
                                                triển chậm hơn so với độ tuổi <br />
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <i class="bi bi-check"></i> <i>Sàng lọc ADHD</i> <br />
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                • Dành cho trẻ từ 0-6 tuổi và 6-12 tuổi <br />
                                                • Biết được rối loạn phát triển thần kinh liên quan đến vấn đề tăng động giảm tập trung của
                                                trẻ <br />
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <i class="bi bi-check"></i> <i>Sàng lọc M-CHAT-R</i> <br />
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                • Dành cho độ tuổi từ 0-36 tháng <br />
                                                • Giúp sàng lọc về các vấn đề rối loạn phổ tự kỷ xem trẻ có nguy cơ mắc bệnh tự kỷ hay không
                                            </div>
                                        </div>


                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Accordion without outline borders -->

                    </div>
                </div>

            </div>
            <!-- ====== Card left ======== -->
            <style>
                /* Accordion */
                .accordion-item {
                    border: 1px solid #ebeef4;
                }

                .accordion-button:focus {
                    outline: 0;
                    box-shadow: none;
                }

                .accordion-button:not(.collapsed) {
                    color: #012970;
                    background-color: #f6f9ff;
                }

                .accordion-flush .accordion-button {
                    padding: 15px 0;
                    background: none;
                    border: 0;
                    font-size: 18px;
                    font-weight: 500;
                }

                .accordion-flush .accordion-button:not(.collapsed) {
                    box-shadow: none;
                    font-size: 18px;
                    color: #94c045;
                    font-weight: 500;
                }

                .accordion-flush .accordion-body {
                    padding: 0 0 15px 0;
                    color: #3e4f6f;
                    font-size: 15px;
                }
            </style>

    </section>
    <div class="tab-pane fade pt-4 me-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <h4> <i class="bi bi-check-circle-fill"></i> ĐĂNG NHẬP / ĐĂNG KÝ</h4>
        <p>
            1. Người dùng truy cập đường <a href="https://app.checkingcare.vn/user/register" target="_blank">link</a> trên trình duyệt web
        </p>
        <p>
            2. Nhập thông tin Đăng ký / Đăng nhập và chọn quyền Giáo viên
        </p>
        <h4> <i class="bi bi-check-circle-fill"></i> Nhập thông tin trẻ</h4>
        <p>1. PH nhập thông tin trẻ tại menu "Quản lý trẻ em".</p>
        <p>2. Thông qua thông tin của trẻ, hệ thống sẽ tự động hỗ trợ đề xuất những bài đánh giá phù
            hợp độ tuổi.</p>
        <h5>Lựa chọn bộ công cụ</h5>

        Bấm vào menu “Bộ công cụ” hệ thống hiển thị màn hình các bộ công cụ gồm:
        <br />

        <i class="bi bi-check"></i> Sàng lọc CBCL <br />
        • Dành cho trẻ có độ tuổi từ 6-18 tuổi <br />
        • Nhận biết các vấn đề tâm lý rối nhiễu, cảm xúc hành vi <br />
        • Lo âu trầm cảm <br />
        • Thu mình, cô đơn <br />
        • Cơ thể, thể chất <br />
        • Xã hội, mỗi quan hệ <br />
        • Suy nghĩ, nhận thức <br />
        • Tập trung, chú ý <br />
        • Hành vi say phạm ( chống đối ) <br />
        • Hành vi thái quá ( hung tính ) <br />
        • Sàng lọc ASQ3 <br />
        • Dành cho trẻ từ 12 tháng đến 6 tuổi <br />
        • Giúp sàng lọc các vấn đề liên quan đến trẻ mầm non phát hiện sớm các lĩnh vực trẻ phát
        triển chậm hơn so với độ tuổi <br />
        • Đánh giá chuyển sâu để có những hỗ trợ tốt cho trẻ <br />
        • Sàng lọc ADHD <br />
        • Dành cho trẻ từ 0-6 tuổi và 6-12 tuổi <br />
        • Biết được rối loạn phát triển thần kinh liên quan đến vấn đề tăng động giảm tập trung của
        trẻ <br />
        • Sàng lọc M – CHAT – R <br />
        • Dành cho độ tuổi từ 0-36 tháng <br />
        • Giúp sàng lọc về các vấn đề rối loạn phổ tự kỷ xem trẻ có nguy cơ mắc bệnh tự kỷ hay không
        <br />
        <h4> <i class="bi bi-check-circle-fill"></i> Thực hiện đánh giá</h4>
        <h5>Đọc hướng dẫn</h5>
        <p>GV đọc kỹ hướng dẫn trước mỗi bài đánh giá / sàng lọc. Lưu ý những thông tin:
        </p>
        <p>1. Giới hạn thời gian</p>
        <p>2. Cách lựa chọn mức điểm cho từng câu hỏi</p>
        <h5>Thực hiện đánh giá / sàng lọc</h5>
        <p>1. Đọc kỹ và trả lời các câu hỏi theo như hướng dẫn và quan sát, đánh giá của giáo viên.
        </p>
        <p>2. Lưu ý: Không nên cân nhắc câu trả lời quá lâu vì điều này có thể gây ảnh hưởng tới độ
            chính xác của kết quả.
        </p>
        <h5>Nhận kết quả</h5>
        <p>Sau khi nhận kết quả, GV có thể lựa chọn Tải về để trực tiếp lưu trữ kết quả trong máy,
            hoặc nhận kết quả thông qua email.
        </p>
        <p><b>Lưu ý</b>: Các bảng hỏi không nhằm mục đích điều tra học sinh và không có giá trị chẩn
            đoán vấn đề, mà giúp chuyên gia và giáo viên định vị những dấu hiệu bất thường và có
            hướng hỗ trợ tốt nhất cho học sinh. Để có thể kết luận một trẻ mắc một rối loạn, cần có
            sự đánh giá lâm sàng chuyên nghiệp từ một bác sĩ / nhà tâm lý có chuyên môn.
        <h5>Làm việc với phụ huynh và nhà trường để có hướng hỗ trợ trẻ tốt nhất.</h5>
        <p>Hướng dẫn trả kết quả cho phụ huynh:</p>
        <p>1. <b>KHÔNG</b> kết luận và gán nhãn học sinh “bị” bệnh.</p>
        <p>2. Chỉ chia sẻ những quan sát của GV về biểu hiện của trẻ, sử dụng thang đánh giá / sàng
            lọc như một công cụ hỗ trợ chỉ ra những dấu hiệu GV lo lắng ở trẻ.</p>
        <p>3. Gợi ý phụ huynh đưa trẻ tới cơ sở y khoa / tâm lý để có sự đánh giá chuyên sâu hơn.
        </p>
        <p>PH có thể liên hệ <b>Trung tâm Braincare</b> để được tư vấn kỹ hơn về kết quả sàng lọc và
            hướng hỗ trợ trẻ.</p>
        <p>Địa chỉ: Tầng 7, Toà nhà 59 Võ Chí Công, P. Nghĩa Đô, Q. Cầu Giấy, Tp. Hà Nội, Việt Nam
        </p>
        <p>Số điện thoại: <a href="tel:1900 3307">1900 3307</a> / <a href="tel:02444553307">(024)
                4455 3307</a></p>
        <p>Email: <a href="mailto:lienhe@braincare.vn">lienhe@braincare.vn</a></p>
        <p>Website: <a href="braincare.vn">braincare.vn</a> / <a href="checkingcare.vn">checkingcare.vn</a> / <a href="phongkhamtamly.com">phongkhamtamly.com</a> /
            <a href="phongkhamtamthan.com">phongkhamtamthan.com</a>
        </p>
    </div>

    <!-- =========Next Procedure======== -->
    <section id="features" class="features" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.dure_twice')}}">
                        <div class="icon-box">
                            <h3>Quy trình trước &nbsp;</h3>
                            <span>(1)&nbsp;</span>
                            <i class="bi bi-arrow-left-circle-fill" style="color: #94c045;"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.dure_twice')}}">
                        <div class="icon-box">
                            <h3>Quy trình sau &nbsp;</h3>
                            <span>(3)&nbsp;</span>
                            <i class="bi bi-arrow-right-circle-fill" style="color: #94c045;"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.slider_team')

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">

            <div class="text-center">
                <h3>Cộng đồng</h3>
                <p> Cộng đồng tâm lý với sứ mệnh thay đổi thói quen và nhận thức của người Việt Nam </br> trong việc chú
                    trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.</p>
                <a class="cta-btn" href="#">Tham gia ngay</a>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->

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