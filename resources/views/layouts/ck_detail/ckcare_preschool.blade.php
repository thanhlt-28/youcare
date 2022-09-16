@extends('layouts.main')
@section('title', 'Mầm non')
@section('content')

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
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_school')}}">CKSchool</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pre-School</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container">
        <div class="section-title">
            <h2 class="ck_header">CKSCHOOL LÀ GÌ?</h2>
        </div>
        <div class="container__ckcare">
            <div class="row">
                <div class="col-md-5 slider-teams d-flex align-items-center justify-content-center">
                    <div class="ck__content">
                        <p class="ck__content_item">
                            CKCare là sản phẩm công nghệ được ứng dụng trong việc theo dõi, sàng lọc và đánh giá nhằm phát hiện sớm những vấn đề rối loạn phát triển cũng như sức khỏe tâm thần của trẻ từ 12 tháng tuổi đến 18 tuổi.
                        </p>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="about-knowledge">
                        <div class="container aos-init aos-animate">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 video-box align-self-baseline position-relative">
                                    <img src="assets/img/blog/GV.png" class="img-fluid" alt="">
                                    <a href="https://youtu.be/7Dth98I6New" class="glightbox play-btn mb-4"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ckcare__pre_school">
                <div class="section-title mb-5">
                    <h2 class="ck_header_desktop">GIẢI PHÁP TOÀN DIỆN CHO TRẺ 12 - 66 THÁNG TUỔI</h2>
                    <h2 class="ck_header_mobile">GIẢI PHÁP TOÀN DIỆN CHO <br> TRẺ 12 - 66 THÁNG TUỔI</h2>
                </div>
                <div class="ckcare__pre_school_content">
                    <div class="row pre__card_box">
                        <div class="col-md-6">
                            <div class="pre__school">
                                <img class="pre__school_road" src="{{asset('assets/img/svg/pre-road.svg')}}" alt="">
                                <div class="pre_proxy">
                                    <a class="pre_proxy_2" href="#">
                                        <img src="{{asset('assets/img/svg/hanh-trinh-2.svg')}}" alt=""></a>
                                    <a class="pre_proxy_1" href="#">
                                        <img src="{{asset('assets/img/svg/hanh-trinh-1.svg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pre__school d-flex justify-content-center">
                                <img class="pre__school_total" src="{{asset('assets/img/svg/pre-school-total.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.ck_detail.ckcare_motion')


        <div class="value__ckcare">

            <div class="section-title">
                <h2 class="ck_header">GIÁ TRỊ CKCARE PRE MANG LẠI</h2>
            </div>
            <div class="value__items aos-init aos-animate">
                <div class="container">
                    <ul class="m-0 nav nav-fill nav-justified nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <h6 style="font-size: 22px;"> <i class="fas fa-envelope-open"></i> Cha mẹ</h6>
                            </button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <h6 style="font-size: 22px;"> <i class="fas fa-user-astronaut"></i> Trẻ em</h6>
                            </button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
                                <h6 style="font-size: 22px;"> <i class="fas fa-home"></i> Nhà trường</h6>
                            </button> </li>
                    </ul>
                    <div class="border-grey bg-white p-3 tab-content">
                        <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class=tabs__content>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hiểu rõ vấn đề tâm sinh lý của con.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Đồng hành kịp thời cùng con.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Cùng con khắc phục và khơi dậy tiềm năng cho con.
                            </p>
                        </div>
                        <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class=tabs__content>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hiểu về tâm sinh lý của mình.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hiểu được năng lực sở trường của mình.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hỗ trợ, đồng hành từ gia đình và chuyên gia.
                            </p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <p class=tabs__content>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Theo dõi và phát hiện sớm các vấn đề.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Tư vấn, hỗ trợ giáo viên trong việc đồng hành cùng học sinh.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Giám sát và báo cáo kịp thời các vấn đề liên quan cho phụ huynh.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Được chuyên gia tư vấn, hỗ trợ xây dựng và triển khai các chương trình phòng ngừa.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hỗ trợ xây dựng kế hoạch phát triển toàn diện cho học sinh.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="value__items__mobile aos-init aos-animate">
                <div class="container">
                    <!-- ultra one -->
                    <ul class="m-0 nav nav-fill nav-text text-start" id="myText" role="tablist">
                        <li class="nav-items" style="margin-left: 10px;">
                            <button class="nav-links" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <h6 class="text-start" style="font-size: 15px;"> <i class="fas fa-envelope-open"></i> Cha mẹ</h6>
                            </button>
                        </li>
                    </ul>
                    <div class="border-green bg-white p-3 tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class=tabs__content>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hiểu rõ vấn đề tâm sinh lý của con.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Đồng hành kịp thời cùng con.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Cùng con khắc phục và khơi dậy tiềm năng cho con.
                            </p>
                        </div>
                    </div>
                    <!-- ultra two -->
                    <ul class="m-0 nav nav-fill nav-text text-start mt-1" id="myText" role="tablist">
                        <li class="nav-items" style="margin-left: 10px;">
                            <button class="nav-links active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <h6 style="font-size: 15px;"> <i class="fas fa-user-astronaut"></i> Trẻ em</h6>
                            </button>
                        </li>
                    </ul>
                    <div class="border-green bg-white p-3 tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class=tabs__content>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hiểu về tâm sinh lý của mình.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hiểu được năng lực sở trường của mình.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hỗ trợ, đồng hành từ gia đình và chuyên gia.
                            </p>
                        </div>
                    </div>
                    <!-- ultra three -->
                    <ul class="m-0 nav nav-fill nav-text text-start mt-1" id="myText" role="tablist">
                        <li class="nav-items" style="margin-left: 10px;">
                            <button class="nav-links" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
                                <h6 style="font-size: 15px;"> <i class="fas fa-home"></i> Nhà trường</h6>
                            </button>
                        </li>
                    </ul>
                    <div class="border-green bg-white p-3 tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class=tabs__content>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Theo dõi và phát hiện sớm các vấn đề.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Tư vấn, hỗ trợ giáo viên trong việc đồng hành cùng học sinh.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Giám sát và báo cáo kịp thời các vấn đề liên quan cho phụ huynh.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Được chuyên gia tư vấn, hỗ trợ xây dựng và triển khai các chương trình phòng ngừa.<br>
                                <i style="color:#67ac2f" class="bi bi-check-circle-fill"></i> Hỗ trợ xây dựng kế hoạch phát triển toàn diện cho học sinh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .border-grey {
            border: 1px solid;
            border-end-start-radius: 20px;
            border-end-end-radius: 20px;
            border-top: none;
            border-color: #67ac2f38;
            box-shadow: 0px 4px 4px #67ac2f;
        }

        .border-green {
            border: 1px solid;
            border-end-start-radius: 20px;
            border-end-end-radius: 20px;
            border-top: none;
            border-color: #67ac2f;
        }

        #myTab {
            background-color: #67ac2f;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        #myText {
            background-color: #67ac2f;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            line-height: 60px;
        }

        .nav-tabs .nav-link {
            margin-bottom: 0px;
            background: 0 0;
            border: 1px solid transparent;
        }

        .nav-tabs .nav-item.show .nav-link {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #67ac2f;
            background-color: #fff;
            border-color: #67ac2f #67ac2f #67ac2f;
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link {
            border-color: #67ac2f #67ac2f #67ac2f;
            isolation: none;
        }


        .nav-text .nav-links {
            background: #67ac2f;
            border: 1px solid #67ac2f;
            color: #fff;

        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: #67ac2f #67ac2f #67ac2f;
            isolation: none;
        }

        .nav-link {
            color: #fff;
        }

        .nav-link:hover {
            color: #fff
        }
    </style>

    <script>
        var firstTabEl = document.querySelector('#myTab li:last-child a')
        var firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
    </script>
    </div>
    </div>


    <div class="container-fluild aos-init aos-animate">
        <div class="container">
            <div class="pre__card">
                <div class="pre__card__hd">
                    <div class="section-title">
                        <h2 class="ck_header">HƯỚNG DẪN </h2>
                    </div>
                    <div class="pre__card_box">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col pre__box">
                                <a target="_blank" href="{{route('layouts.procedure.teacher')}}">
                                    <div class="pre__box_1">
                                        <div class="pre__img">
                                            <img src="{{asset('assets/img/clients/pre-danh-cho-giao-vien.jpg')}}" alt="">
                                        </div>
                                        <div class="pre__box__content">
                                            DÀNH CHO GIÁO VIÊN
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col pre__box">
                                <a target="_blank" href="{{route('layouts.procedure.manager')}}">
                                    <div class="pre__box_2">
                                        <div class="pre__img">
                                            <img src="{{asset('assets/img/clients/pre-danh-cho-quan-ly.jpg')}}" alt="">
                                        </div>
                                        <div class="pre__box__content">
                                            DÀNH CHO QUẢN LÝ
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col pre__box">
                                <a target="_blank" href="{{route('layouts.procedure.parents')}}">
                                    <div class="pre__box_3">
                                        <div class="pre__img">
                                            <img src="{{asset('assets/img/clients/pre-danh-cho-cha-me.jpg')}}" alt="">
                                        </div>
                                        <div class="pre__box__content">
                                            DÀNH CHO CHA MẸ
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container__mobile">
                <div class="section-title">
                    <h2 class="ck_header">HƯỚNG DẪN </h2>
                </div>
                <div class="container__mobile__items">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 mt-3">
                                <div class="pre__box_hd">
                                    <a href="{{route('layouts.procedure.teacher')}}" target="_blank">
                                        <div class="icon__box text-center">
                                            DÀNH CHO GIÁO VIÊN
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-3">
                                <div class="pre__box_hd">
                                    <a target="_blank" href="{{route('layouts.procedure.manager')}}">
                                        <div class="icon__box text-center">
                                            DÀNH CHO QUẢN LÝ
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-3">
                                <div class="pre__box_hd">
                                <a target="_blank" href="{{route('layouts.procedure.parents')}}">
                                        <div class="icon__box text-center">
                                            DÀNH CHO CHA MẸ
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.team')
    @include('layouts.say')

</main>

@include('clients.about.group')

@endsection