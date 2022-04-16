@extends('layouts.main')
@section('title', 'ChkCare')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="bread-chkcare">
            <div class="container">
                <div class="header-hero">
                    <a href="#">
                        <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-product">
            <h5>
                <q>Không trẻ em nào bỏ lại phía sau - Hãy bắt đầu theo dõi và sàng lọc cho trẻ ngay từ hôm nay!</q>
            </h5>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.product')}}">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ứng dụng ChkCare</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-uppercase">Giới thiệu bộ công cụ</h2>
            </div>
            <!-- ======= Features Section ======= -->
            <section id="features" class="features" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="icon-box">
                                                <i class="bi bi-shop" style="color: #ffbb2c;"></i>
                                                <h3><a href="">ASQ-3</a></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="icon-box">
                                                <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                                                <h3><a href="">CBCL</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="icon-box">
                                                <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                                                <h3><a href="">ADHD</a></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <div class="icon-box">
                                                <i class="bi bi-paint-bucket" style="color: #e361ff;"></i>
                                                <h3><a href="">M-Char-R</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-3">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="box" data-aos="fade-up">
                                            <h3>Free</h3>
                                            <h4><sup>$</sup>0<span> / month</span></h4>
                                            <ul>
                                                <li>Aida dere</li>
                                                <li>Nec feugiat nisl</li>
                                                <li>Nulla at volutpat dola</li>
                                                <li class="na">Pharetra massa</li>
                                                <li class="na">Massa ultricies mi</li>
                                            </ul>
                                            <div class="btn-wrap">
                                                <a href="#" class="btn-buy">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features Section -->

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-uppercase">Quy trình sàng lọc</h2>
            </div>
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
                                    <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-cog"></i> </div>
                                    Học sinh
                                </button>
                                <button class="nav-link" id="v-pills-teams-tab" data-bs-toggle="pill" data-bs-target="#v-pills-teams" type="button" role="tab" aria-controls="v-pills-teams" aria-selected="false">
                                    <div class="circle-icon d-flex align-items-center justify-content-center me-3"> <i class="fa fa-cog"></i> </div>
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

        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8 align-self-baseline position-relative">
                        <div class="section-title" data-aos="fade-up">
                            <h2 class="text-uppercase">ĐỘI NGŨ CHUYÊN GIA</h2>
                        </div>

                        <div class="content">

                            <div class="site-section bg-left-half mb-5">
                                <div class="owl-2-style">

                                    <div class="owl-2">
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/nguyen-van-dung.png" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/thay-thuoc-uu-tu-nguyen-van-dung/">THẦY THUỐC ƯU TÚ BSCC.TS.BSCKII<br />
                                                    NGUYỄN VĂN DŨNG
                                                </a></h4>
                                            <p>Phó viện trưởng Viện sức khỏe
                                                tâm thần <br /> Bệnh viện Bạch Mai</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/pham-van-tu.png" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/tien-si-pham-van-tu/">TIẾN SĨ<br /> PHẠM VĂN TƯ</a></h4>
                                            <p>Phó trưởng Khoa Công tác xã hội,<br> trường Đại học Sư phạm Hà Nội</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thi-Tham-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/tien-si-nguyen-thi-tham/">TIẾN SĨ<br />
                                                    NGUYỄN THỊ THẮM</a></h4>
                                            <p>
                                                Tiến sĩ ngành: tâm lý – giáo dục
                                            </p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Mai-Huong-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/tien-si-nguyen-thi-mai-huong/">TIẾN SĨ<br />
                                                    NGUYỄN THỊ MAI HƯƠNG</a></h4>
                                            <p>
                                                Tiến sĩ chuyên ngành: Tâm lý học</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thanh-Van-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thanh-van/">THẠC SĨ<br />
                                                    NGUYỄN THỊ THANH VÂN</a></h4>
                                            <p>
                                                Thạc sĩ chuyên ngành: Tâm lý học
                                                lâm sàng</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/hoang-le-thuy.png" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/thac-si-hoang-le-thuy/">THẠC SĨ<br />
                                                    HOÀNG LÊ THỦY</a></h4>
                                            <p>
                                                Thạc sĩ chuyên ngành: Tâm lý học lâm sàng<br /> trẻ em và thanh thiếu niên</p>
                                        </div>
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thuy-Hang-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thuy-hang/">THẠC SĨ<br />
                                                    NGUYỄN THỊ THÚY HẰNG</a></h4>
                                            <p>
                                                Thạc sĩ chuyên ngành: Giáo dục học</p>
                                        </div>
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Hien-Minh-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-hien-minh/">THẠC SĨ<br />
                                                    NGUYỄN HIỀN MINH</a></h4>
                                            <p>
                                                Thạc sĩ chuyên ngành: Công tác xã hội</p>
                                        </div>
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Le-The-Hanh-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/thac-si-le-the-hanh/">THẠC SĨ<br />
                                                    LÊ THẾ HANH</a></h4>
                                            <p>
                                                Thạc sĩ Tâm lý học Lâm sàng</p>
                                        </div>
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Dang-Minh-Khue-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" href="https://phongkhamtamly.com/thac-si-dang-minh-khue/">THẠC SĨ<br />
                                                    ĐẶNG MINH KHUÊ</a></h4>
                                            <p>
                                                Thạc sĩ Tâm lý học Lâm sàng</p>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.prod_detail.awnser')

</main>
@endsection