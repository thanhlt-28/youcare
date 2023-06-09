@section('title', 'Dành cho quản lý')
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
                                    <div class="p-3 mb-5">
                                        <img src="assets/img/blog/video-nql.jpg" class="img-fluid" alt="">
                                        <a href="https://youtu.be/CUTzrA5yx38" class="glightbox play-btn"></a>
                                        <div class="box-text text-center pt-3">
                                            <h6 class="proce-text">HD NHÀ QUẢN LÝ SỬ DỤNG BỘ CÔNG CỤ ĐÁNH GIÁ & SÀNG LỌC</h6>
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
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_preschool')}}">Hướng dẫn</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dành cho quản lý</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Tab Section ======= -->
    <section class="main-procedure" data-aos="fade-up">
        <div class="container">

            <!-- Accordion Dành cho -->
            <div class="col-lg-12">
                <div class="card-body">
                    <h3 class="card-title mt-1 mb-3">Dành cho đánh giá & sàng lọc dành cho quản lý</h3>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 18px;">
                                    <b>Bước 1: Chuẩn bị sàng lọc </b>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="login">
                                            <div class="accordion-body">
                                                <p><b>1. Đăng nhập</b></p>
                                                <b> • Nhà quản lý <a href="https://ck.youcare.vn/user/login" target="_blank">đăng nhập</a> bằng tài khoản đã được cung cấp.</b></br>
                                                <b> • Nhập dữ liệu học sinh theo lớp.</b></br>
                                                <b> • Làm việc với giáo viên về tính cần thiết của việc thực hiện sàng lọc cho học sinh.</b></br>
                                                <i>Lưu ý:</i></br>

                                                <p>
                                                    • Giải thích rõ việc làm sàng lọc không nhằm điều tra học sinh và không có tác dụng chẩn đoán lâm sàng, khuyến cáo giáo viên KHÔNG gán nhãn học sinh “bị bệnh” sau khi nhận kết quả.
                                                    • Đảm bảo bảo mật thông tin học sinh

                                                </p>

                                                <p><b>2. Chọn công cụ:</b></p>
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
                                                        • Xã hội, mối quan hệ <br />
                                                    </div>
                                                    <div class="col-md-4">
                                                        • Suy nghĩ, nhận thức <br />
                                                        • Tập trung, chú ý <br />
                                                    </div>
                                                    <div class="col-md-4">
                                                        • Hành vi sai phạm (chống đối) <br />
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
                                                        • Đánh giá chuyên sâu để có những hỗ trợ tốt cho trẻ <br />
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
                                    <b>Bước 2: Thực hiện đánh giá </b>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="hd">
                                            <div class="accordion-body">
                                                <b> Nhà quản lý thao tác những chức năng của tài khoản theo hướng dẫn trong <a href="https://youtu.be/CUTzrA5yx38" class="glightbox play-btn mb-4">video hướng dẫn sử dụng</a> dành cho quản lý.</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 18px;">
                                    <b>Bước 3: Nhận kết quả </b>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="result">
                                            <div class="accordion-body">
                                                <b>Nhận kết quả:</b>
                                                <p>
                                                    • Sau khi các bài sàng lọc được hoàn thành, nhà quản lý có thể lựa chọn "Tải về" để trực tiếp lưu trữ kết quả trong máy, hoặc nhận kết quả thông qua email. <br>
                                                    • Kết quả sàng lọc sẽ cho quản lý một cái nhìn bao quát nhất về những nhóm vấn đề học sinh đang gặp khó khăn. <br>
                                                    • Dựa vào kết quả, nhà quản lý có thể có những phương hướng thích hợp để hỗ trợ, cải thiện những vấn đề học sinh gặp phải.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 18px;">
                                    <b>Bước 4: Hỗ trợ chuyên sâu </b>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active" id="hd">
                                            <div class="accordion-body">
                                                <b>Nhà quản lý có thể liên hệ Trung tâm Braincare để được tư vấn chi tiết về kết quả sàng lọc và hướng hỗ trợ trẻ. </b>
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
                    <a class="d-flex align-item-start" href="{{route('layouts.procedure.students')}}">
                        <div class="icon-box">
                            <i class="bi bi-arrow-left-circle-fill" style="color: #94c045;"></i>
                            <h3>Dành cho học sinh &nbsp;</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.manager')}}">
                        <div class="icon-box">
                            <h3>Dành cho chuyên môn &nbsp;</h3>
                            <i class="bi bi-arrow-right-circle-fill" style="color: #94c045;"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.team')


    @include('layouts.say')

    @include('layouts.video_source')

</main>

@endsection
