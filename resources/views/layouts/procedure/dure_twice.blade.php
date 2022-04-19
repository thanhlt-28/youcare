@extends('layouts.main')
@section('title', 'Chuẩn bị chương trình')
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
                    <li class="breadcrumb-item active" aria-current="page">Chuẩn bị chương trình</li>
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
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias eum fugiat asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime at magnam modi iusto porro excepturi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias eum fugiat asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime at magnam modi iusto porro excepturi.</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias eum fugiat asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime at magnam modi iusto porro excepturi.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

    @include('layouts.slider_team')

    <!-- =========Next Procedure======== -->
    <section id="features" class="features" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content" href="{{route('layouts.procedure.dure_once')}}">
                        <div class="icon-box">
                            <i class="bi bi-arrow-left-circle-fill" style="color: #94c045;"></i>
                            <h3>Quy trình trước &nbsp;</h3>
                            <span>(1)&nbsp;</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a class="d-flex justify-content-end" href="{{route('layouts.procedure.dure_three')}}">
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

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">

            <div class="text-center">
                <h3>Cộng đồng</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

</main><!-- End #main -->

@endsection