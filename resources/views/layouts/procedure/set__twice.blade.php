@section('title', 'Hành trình 2')
@section('content')
@extends('layouts.main')

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
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_school')}}">Trường học</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hành trình 2</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="section-title">
    <div class="section-title">
                <h2 class="ck_header">HỖ TRỢ ĐỒNG HÀNH</h2>
            </div>
        <h5>
            CKCare xây dựng chương trình chăm sóc sức khỏe tinh thần toàn diện
        </h5>
    </div>

    <div class="container">
        <div class="content-items">
            <div class="content-wrap nav-border">
                <div class="row">

                    <div class="col-12 col-lg-7">
                        <div style="padding:20px" class="content-body d-flex align-items-center">
                            <div>
                                <i><i class="bi bi-circle-square"></i> BrainCare xây dựng chương trình chăm sóc sức khỏe tinh thần toàn diện cho trẻ em, phối hợp giữa nhà trường, phụ huynh và học sinh.</i>
                                <br>
                                <b> Sau khi đánh giá, sàng lọc ra các vấn đề của trẻ như: </b>
                                <br>
                                <i class="bi bi-chevron-double-right"></i> Rối loạn phát triển <br>
                                <i class="bi bi-chevron-double-right"></i> Rối nhiễu tâm lý <br>
                                <i class="bi bi-chevron-double-right"></i> Sức khỏe tâm thần<br>
                                <div class="content-items mt-3">
                                    <b> Hỗ trợ chuyên sâu: </b>
                                    <br>
                                    <i class="bi bi-chevron-double-right"></i> Hotline: <span>(024) 4455 3307</span> <br>
                                    <i class="bi bi-chevron-double-right"></i> Tổng đài tư vấn: <span>1900 3307</span> <br>
                                    <i class="bi bi-chevron-double-right"></i> Website: <a href="https://braincare.vn/" target="_blank">braincare.vn</a> <br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center">
                        <div class="img-content d-flex justify-content-center">
                            <img width="70%" src="{{asset('assets/img/mental-ht2.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="value__ckcare">
            
            <div class="value__items">
                <div class="container">
                    <ul class="m-0 nav nav-fill nav-justified nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <h6 style="font-size: 22px;"> <i class="fas fa-envelope-open"></i> Phụ huynh</h6>
                            </button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <h6 style="font-size: 22px;"> <i class="fas fa-user-astronaut"></i> Học sinh</h6>
                            </button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
                                <h6 style="font-size: 22px;"> <i class="fas fa-home"></i> Nhà trường</h6>
                            </button> </li>
                    </ul>
                    <div class="border-grey bg-white p-3 tab-content">
                        <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p class=tabs__content>
                                <b> Sau khi sử dụng CKCare bố mẹ sẽ giúp phụ huynh: </b><br>
                                <i class="bi bi-play-circle"></i> Hiểu được tình trạng sức khoẻ tinh thần của con hiện tại.<br>
                                <i class="bi bi-play-circle"></i> Đồng thời, các chuyên
                                gia sẽ hướng dẫn các phương pháp hỗ trợ, đồng hành với con hiệu quả hơn.<br>
                                <i class="bi bi-play-circle"></i> Từ đó, giúp con phát huy tốt nhất điểm mạnh của mình!.
                            </p>
                        </div>
                        <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class=tabs__content>
                                <b> Khi sử dụng CKCare sẽ giúp các em: </b><br>
                                <i class="bi bi-play-circle"></i> Tự hiểu về tâm sinh lý của mình.<br>
                                <i class="bi bi-play-circle"></i> Được sự hỗ trợ và đồng hành của nhà trường, cha mẹ và chuyên gia.<br>
                                <i class="bi bi-play-circle"></i> Từ đó, hiểu được năng lực sở trường của mình.<br>
                            </p>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <p class=tabs__content>
                                <b>Sau khi sử dụng CKCARE, chuyên gia của BrainCare sẽ giúp giáo viên &amp; nhà trường:</b><br>
                                <i class="bi bi-play-circle"></i> Tư vấn hỗ trợ giáo viên trong việc đồng hành cùng học sinh<br>
                                <i class="bi bi-play-circle"></i> Đồng thời, CKCARE giúp giáo viên Giám sát báo cáo kịp thời các vấn đề liên quan đến học sinh cho phụ huynh<br>
                                <i class="bi bi-play-circle"></i> Nhờ vậy, Nhà trường và
                                phụ huynh cùng phối hợp, chia sẻ và đồng hành với các con để tìm ra các phương pháp giúp con dự phòng và đối mặt với các vấn đề tâm lý.<br>
                                <i class="bi bi-play-circle"></i> Và trên hành trình đó,
                                BrainCare luôn luôn đồng hành và sẵn sàng hỗ trợ các con cũng như đồng hành cùng gia đình và nhà trường.<br>
                                <i class="bi bi-play-circle"></i> Bên cạnh đó, Các chuyên
                                gia đến từ BrainCare sẽ có những định hướng giúp Nhà trường Xây dựng các hoạt động ngoại khóa, các phòng khám tâm lý, các buổi chia sẻ của chuyên gia về các vấn đề
                                liên quan đến chăm sóc sức khỏe tinh thần,... giúp phòng ngừa nguy cơ rủi ro liên quan đến sức khỏe tinh thần và các rối loạn phát triển của học sinh<br>
                                <i class="bi bi-play-circle"></i> Từ đó, Nhà trường, giáo
                                viên sẽ có các kế hoạch cụ thể nhằm phát triển toàn diện cho học sinh đảm bảo về sức khỏe tinh thần cho trẻ em<br>

                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="value__items__mobile">
                <div class="container">
                    <!-- ultra one -->
                    <ul class="m-0 nav nav-fill nav-text text-start" id="myText" role="tablist">
                        <li class="nav-items" style="margin-left: 10px;">
                            <button class="nav-links" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <h6 class="text-start" style="font-size: 20px;"> <i class="fas fa-envelope-open"></i> Cha mẹ</h6>
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
                                <h6 style="font-size: 20px;"> <i class="fas fa-user-astronaut"></i> Trẻ em</h6>
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
                                <h6 style="font-size: 20px;"> <i class="fas fa-home"></i> Nhà trường</h6>
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
                    line-height: 61px;
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
                    background: #67ac2f00;
                    border: 1px solid transparent;
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




    <!-- ======= Features Section ======= -->
    <div class="container-fluild">
        <div class="container">
            <div class="high__card">
                <div class="high__card__hd">
                    <div class="section-title">
                        <h2 class="ck_header">QUY TRÌNH SÀNG LỌC</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-md-4 g-2">
                        <div class="col high__box">
                            <a target="_blank" href="{{route('layouts.procedure.teacher')}}">
                                <div class="high__box_1">
                                    <div class="high__img">
                                        <img src="{{asset('assets/img/clients/pre-danh-cho-giao-vien.jpg')}}" alt="">
                                    </div>
                                    <div class="high__box__content">
                                        DÀNH CHO GIÁO VIÊN
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col high__box">
                            <a target="_blank" href="{{route('layouts.procedure.manager')}}">
                                <div class="high__box_2">
                                    <div class="high__img">
                                        <img src="{{asset('assets/img/clients/pre-danh-cho-quan-ly.jpg')}}" alt="">
                                    </div>
                                    <div class="high__box__content">
                                        DÀNH CHO QUẢN LÝ
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col high__box">
                            <a target="_blank" href="{{route('layouts.procedure.parents')}}">
                                <div class="high__box_3">
                                    <div class="high__img">
                                        <img src="{{asset('assets/img/clients/pre-danh-cho-cha-me.jpg')}}" alt="">
                                    </div>
                                    <div class="high__box__content">
                                        DÀNH CHO PHỤ HUYNH
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col high__box">
                            <a target="_blank" href="{{route('layouts.procedure.students')}}">
                                <div class="high__box_4">
                                    <div class="high__img">
                                        <img src="{{asset('assets/img/clients/pre-danh-cho-hoc-sinh.jpg')}}" alt="">
                                    </div>
                                    <div class="high__box__content">
                                        DÀNH CHO HỌC SINH
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container__mobile">
                <div class="section-title">
                    <h2 class="ck_header">QUY TRÌNH SÀNG LỌC</h2>
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
                                    <a href="https://checkingcare.vn/cbcl/" target="_blank">
                                        <div class="icon__box text-center">
                                            DÀNH CHO QUẢN LÝ
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-3">
                                <div class="pre__box_hd">
                                    <a href="https://checkingcare.vn/cbcl/" target="_blank">
                                        <div class="icon__box text-center">
                                            DÀNH CHO PHỤ HUYNH
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-3">
                                <div class="pre__box_hd">
                                    <a href="https://checkingcare.vn/cbcl/" target="_blank">
                                        <div class="icon__box text-center">
                                            DÀNH CHO HỌC SINH
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

    </section>

    @include('clients.about.group')

</main>

<!-- End #main -->

@endsection