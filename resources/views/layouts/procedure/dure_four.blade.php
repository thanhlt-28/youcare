@section('title', 'Quy trình nhà quản lý')
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
                    <li class="breadcrumb-item active" aria-current="page">Quy trình nhà quản lý</li>
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
                            <h5 class="card-title">
                                <i class="bi bi-check-circle-fill">
                                </i>&nbsp;CHUẨN BỊ SÀNG LỌC
                            </h5>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active" id="login">
                                <div class="accordion-body">
                                    <b> Người dùng đăng nhập bằng tài khoản đã được cung cấp.</b></br>
                                    <b> Nhập dữ liệu học sinh theo lớp.</b></br>
                                    <b> Làm việc với giáo viên về tính cần thiết của việc thực hiện sàng lọc cho học sinh.</b></br>
                                    <i>Lưu ý:</i></br>

                                    <p>
                                        • Giải thích rõ việc làm sàng lọc không nhằm điều tra học sinh và không có tác dụng chẩn đoán lâm sàng, khuyến cáo giáo viên KHÔNG gán nhãn học sinh “bị bệnh” sau khi nhận kết quả.
                                        • Đảm bảo bảo mật thông tin học sinh

                                    </p>
                                    <b> Lựa chọn bộ công cụ phù hợp với lứa tuổi học sinh cần thực hiện sàng lọc</b>

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
                            <h5 class="card-title"><i class="bi bi-check-circle-fill"></i>&nbsp; QUẢN LÝ THỰC HIỆN SÀNG LỌC</h5>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active" id="hd">
                                <div class="accordion-body">
                                    <b> Nhà quản lý thao tác những chức năng của tài khoản được hướng dẫn trong hướng dẫn sử dụng <a href=""> (not link)</a></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container network_wrapper col-sm p-2 ">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="bi bi-check-circle-fill">
                                </i>&nbsp;NHẬN KẾT QUẢ
                            </h5>
                        </div>
                        <div class="card-body tab-content">
                            <div class="tab-pane active" id="result">
                                <div class="accordion-body">
                                    <b>Nhận kết quả:</b>
                                    <p>• Sau khi các bài sàng lọc được hoàn thành, nhà quản lý có thể lựa chọn "Tải về" để trực tiếp lưu trữ kết quả trong máy, hoặc nhận kết quả thông qua email. <br>
                                        • Kết quả sàng lọc sẽ cho nhà quản lý một cái nhìn bao quát nhất về những nhóm vấn đề học sinh đang gặp khó khăn. Dựa vào kết quả, nhà quản lý có thể có những phương hướng thích hợp để hỗ trợ, cải thiện những vấn đề học sinh gặp phải.
                                    </p>
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
                                    <b>Nhà quản lý có thể liên hệ Trung tâm Braincare để được tư vấn chi tiết về kết quả sàng lọc và hướng hỗ trợ trẻ. </b>
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
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.dure_five')}}">
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