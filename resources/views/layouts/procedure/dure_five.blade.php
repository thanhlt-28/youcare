@section('title', 'Quy trình nhà chuyên môn')
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
                    <li class="breadcrumb-item active" aria-current="page">Quy trình nhà chuyên môn</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Tab Section ======= -->
    <section class="main-content" data-aos="fade-up">
        <div class="container">
            <div class="min-vh-100 py-2">
                <div class="container network_wrapper col-sm p-2 ">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><i class="bi bi-check-circle-fill"></i>&nbsp;CHUẨN BỊ SÀNG LỌC</h5>
                            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#login">Đăng kí/ Đăng nhập <i class="bi bi-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#infor">Nhập thông tin trẻ <i class="bi bi-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#success">Thực hiện sàng lọc</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active" id="login">
                                <div class="accordion-body">
                                    <b>Đăng kí/ Đăng nhập</b>
                                    <p>
                                        • Người dùng truy cập đường link <a href="https://app.checkingcare.vn/user/register" target="_blank">https://app.checkingcare.vn/user/register</a> trên trình duyệt web
                                        có kết nối Internet <br>
                                        • Nhập thông tin Đăng ký/ Đăng nhập
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="infor">
                                <div class="accordion-body">
                                    • Chuyên gia nhập thông tin trẻ tại menu “Quản lý trẻ em”. </br>
                                    • Thông qua thông tin của trẻ, hệ thống sẽ tự động hỗ trợ đề xuất những bài đánh giá phù hợp độ tuổi.
                                </div>
                            </div>
                            <div class="tab-pane" id="success">
                                <div class="accordion-body">
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
                <div class="container network_wrapper col-sm p-2 ">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><i class="bi bi-check-circle-fill"></i>&nbsp;THỰC HIỆN ĐÁNH GIÁ</h5>
                            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#hdsd">Hướng dẫn và đọc kỹ hướng dẫn <i class="bi bi-arrow-right"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#actions">Thực hiện đánh giá/ sàng lọc</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active" id="hdsd">
                                <div class="accordion-body">
                                    <b>GV đọc kỹ hướng dẫn trước mỗi bài đánh giá / sàng lọc. </b>
                                    <br>
                                    <p>• Chuyên gia lưu ý đọc và giải thích, hướng dẫn rõ ràng với thân chủ về bài đánh giá / sàng lọc trước khi thực hiện bài test.
                                        <i>Lưu ý những thông tin:</i>
                                        • Đối tượng thực hiện bài test (PH, GV, HS, độ tuổi của HS)<br>
                                        • Giới hạn thời gian<br>
                                        • Cách lựa chọn mức điểm cho từng câu hỏi.<br>
                                        <i>• Lưu ý: Không nên cân nhắc câu trả lời quá lâu vì điều này có thể gây ảnh hưởng tới độ chính xác của kết quả.</i>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="actions">
                                <div class="accordion-body">
                                    • Với những bài đánh giá được thực hiện bởi thân chủ, nhà chuyên môn hỗ trợ để đảm bảo thân chủ hiểu rõ các mệnh đề, đồng thời thu thập thêm thông tin.<br>
                                    • Thân chủ có thể đánh giá các vấn đề không chính xác so với thực tế (nhẹ hơn hoặc nặng hơn). Nhà chuyên môn cần chú ý quan sát và sử dụng kỹ năng lâm sàng để đảm bảo thu được thông tin chính xác.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container network_wrapper col-sm p-2 ">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><i class="bi bi-check-circle-fill"></i>&nbsp;NHẬN KẾT QUẢ</h5>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active" id="result">
                                <div class="accordion-body">
                                    <b>Nhận kết quả:</b>
                                    <br>
                                    <b>Sau khi nhận kết quả, GV có thể lựa chọn Tải về để trực tiếp lưu trữ kết quả trong máy, hoặc nhận kết quả thông qua email.
                                    </b>
                                </div>
                            </div>
                            <div class="tab-pane" id="working">
                                <div class="accordion-body">
                                    <b>Hướng dẫn trả kết quả cho phụ huynh:</b></br>
                                    • KHÔNG kết luận và gán nhãn học sinh “bị” bệnh.</br>
                                    • Chỉ chia sẻ những quan sát của GV về biểu hiện của trẻ, sử dụng thang đánh giá / sàng lọc như một công cụ hỗ trợ chỉ ra những dấu hiệu GV lo lắng ở trẻ.</br>
                                    • Gợi ý phụ huynh đưa trẻ tới cơ sở y khoa / tâm lý để có sự đánh giá chuyên sâu hơn.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container network_wrapper col-sm p-2 ">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><i class="bi bi-check-circle-fill"></i>&nbsp;HỖ TRỢ CHUYÊN SÂU</h5>
                            </ul>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active" id="hd">
                                <div class="accordion-body">
                                    <b>Nếu gặp các khó khăn trong quá trình thao tác ứng dụng, nhà chuyên môn có thể liên hệ Trung tâm Braincare để được tư vấn kỹ và hỗ trợ kỹ thuật. 
                                    </b>
                                    <br>
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
        </div>
    </section>

    <!-- =========Next Procedure======== -->
    <section id="features" class="features" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex align-item-start" href="{{route('layouts.procedure.dure_three')}}">
                        <div class="icon-box">
                            <h3>Quy trình trước &nbsp;</h3>
                            <span>(3)&nbsp;</span>
                            <i class="bi bi-arrow-left-circle-fill" style="color: #94c045;"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.dure_four')}}">
                        <div class="icon-box">
                            <h3>Quy trình sau &nbsp;</h3>
                            <span>(5)&nbsp;</span>
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