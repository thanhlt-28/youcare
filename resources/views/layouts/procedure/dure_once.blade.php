@extends('layouts.main')
@section('title', 'Trước khi bắt đầu')
@section('content')

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
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.chkcare_detail')}}">Quy trình</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Trước khi bắt đầu</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Tab Section ======= -->
    <section class="main-content" data-aos="fade-up">
        <div class="container">
            <div class="d-flex bg-white flex-row shadow nav-border">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3 nav-shadow pb-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-home"></i> </div>
                            Nhà trường
                        </button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-user"></i> </div>
                            Giáo viên
                        </button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-envelope"></i> </div>
                            Phụ huynh
                        </button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="bi bi-lightbulb-fill"></i> </div>
                            Học sinh
                        </button>
                        <button class="nav-link" id="v-pills-teams-tab" data-bs-toggle="pill" data-bs-target="#v-pills-teams" type="button" role="tab" aria-controls="v-pills-teams" aria-selected="false">
                            <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="bi bi-people-fill"></i> </div>
                            Chuyên gia về trẻ
                        </button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active pt-4 me-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <!-- <img src="https://htmlcss3tutorials.com/wp-content/themes/htmlcss3TutorialRevamp/assets/img/course/HTMLCSS.jpg" alt="" class="img-cont me-3"> -->
                            <h4> <i class="bi bi-check-circle-fill"></i> ĐĂNG NHẬP / ĐĂNG KÝ</h4>
                            <h5>Đăng kí tài khoản</h5>
                            <p>
                                1. Người dùng truy cập đường link <a href="https://app.checkingcare.vn/user/register" target="_blank">https://app.checkingcare.vn/user/register</a> trên trình duyệt web có kết nối Internet
                            </p>
                            <p>
                                2. Nhập thông tin Đăng ký và chọn quyền Giáo viên </p>
                            <p>
                                3. Bấm Đăng ký
                            </p>

                            <h5>Đăng nhập</h5>
                            <p>
                                1. Người dùng truy cập đường link: <a href="https://app.checkingcare.vn/user/login" target="_blank">https://app.checkingcare.vn/user/login</a> trên trình duyệt kết nối internet
                            </p>
                            <p>
                                2. Nhập thông tin Đăng nhập hoặc Đăng nhập thông qua Facebook / Google
                            </p>
                            <p>
                                3. Bấm đăng nhập
                            </p>

                            <h4><i class="bi bi-check-circle-fill"></i> THỰC HIỆN ĐÁNH GIÁ</h4>

                            <h5>Thêm trẻ</h5>
                            <p>
                                Người dùng bấm vào menu “Quản lý trẻ em” hệ thống hiển thị màn hình:
                            </p>
                            <p>Người dùng thực hiện các bước sau: <b> <i> B1. Click vào “Thêm”</i>
                                    <i class="bi bi-arrow-right"> B2. Nhập đầy đủ thông tin trẻ </i>
                                    <i class="bi bi-arrow-right"> B3. Click thêm</i></b>
                            </p>
                            <h5>Lựa chọn bộ công cụ</h5>

                            Bấm vào menu “Bộ công cụ” hệ thống hiển thị màn hình các bộ công cụ gồm:
                            <br/>
                            
                            <i class="bi bi-check"></i> Sàng lọc CBCL  <br/>
                            • Dành cho trẻ có độ tuổi từ 6-18 tuổi  <br/>
                            • Nhận biết các vấn đề tâm lý rối nhiễu, cảm xúc hành vi  <br/>
                            • Lo âu trầm cảm  <br/>
                            • Thu mình, cô đơn  <br/>
                            • Cơ thể, thể chất  <br/>
                            • Xã hội, mỗi quan hệ  <br/>
                            • Suy nghĩ, nhận thức  <br/>
                            • Tập trung, chú ý  <br/>
                            • Hành vi say phạm ( chống đối )  <br/>
                            • Hành vi thái quá ( hung tính )  <br/>
                            • Sàng lọc ASQ3  <br/>
                            • Dành cho trẻ từ 12 tháng đến 6 tuổi  <br/>
                            • Giúp sàng lọc các vấn đề liên quan đến trẻ mầm non phát hiện sớm các lĩnh vực trẻ phát triển chậm hơn so với độ tuổi  <br/>
                            • Đánh giá chuyển sâu để có những hỗ trợ tốt cho trẻ  <br/>
                            • Sàng lọc ADHD  <br/>
                            • Dành cho trẻ từ 0-6 tuổi và 6-12 tuổi  <br/>
                            • Biết được rối loạn phát triển thần kinh liên quan đến vấn đề tăng động giảm tập trung của trẻ  <br/>
                            • Sàng lọc M – CHAT – R  <br/>
                            • Dành cho độ tuổi từ 0-36 tháng  <br/>
                            • Giúp sàng lọc về các vấn đề rối loạn phổ tự kỷ xem trẻ có nguy cơ mắc bệnh tự kỷ hay không  <br/>

                        </div>
                        <div class="tab-pane fade pt-4 me-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="tab-pane fade pt-4 me-4" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h4>Lorem Ipsum</h4>
                            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade pt-4 me-4" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <h4>Lorem Ipsum</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade pt-4 me-4" id="v-pills-teams" role="tabpanel" aria-labelledby="v-pills-teams-tab">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias eum fugiat asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime at magnam modi iusto porro excepturi.</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias eum fugiat asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime at magnam modi iusto porro excepturi.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                </div>
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.dure_twice')}}">
                        <div class="icon-box">
                            <h3>Quy trình sau &nbsp;</h3>
                            <span>(2)&nbsp;</span>
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
                <p> Cộng đồng tâm lý với sứ mệnh thay đổi thói quen và nhận thức của người Việt Nam </br> trong việc chú trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.</p>
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