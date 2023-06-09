@extends('layouts.main')
@section('title', 'CKCare School')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-ckcare"></div>
        <div class="bread-ckcare__school">
            <div class="container">
                <div class="header-hero">
                    <div class="header-hero__slogan">
                        <h2>CKCARE<br />CHO NHÀ TRƯỜNG</h2>
                        <div class="header___slogan">
                            <h5>"Không trẻ em nào bị bỏ lại phía sau" <br />Hãy bắt đầu theo dõi & sàng lọc<br /> cho trẻ ngay từ hôm nay!</h5>
                        </div>
                    </div>

                    <div class="header__btn__cta">
                        <a href="https://ck.youcare.vn/user/login" target="_blank">
                            <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_detail')}}">CKCare</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nhà trường</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="container_ckcare">
        <div class="container">
            <div class="section-title">
                <h2 class="ck_header">CK<span style="color: #67ac2f">CARE</span> SCHOOL LÀ GÌ?</h2>
            </div>
            <div class="container__ckcare">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ck__content">
                            <div class="ck__content_item">
                                <p><span style="color: #67ac2f;"> &#8226; </span> Đối với nhà trường, giáo viên sử dụng CKCare để sàng lọc, đánh giá cho số lượng lớn các trẻ/học sinh đang học tập tại trường, nhằm phát hiện sớm những trẻ/học sinh đang gặp các vấn đề về rối loạn phát triển (tự kỷ, tăng động - giảm chú ý, chậm nói, chậm phát triển,...) hay đang gặp các vấn đề về rối loạn tâm thần (trầm cảm, lo âu, stress,...), từ đó có hướng can thiệp, trị liệu kịp thời. Với mỗi đối tượng khác nhau, CKCare School ứng dụng các bộ công cụ khác nhau để tối ưu hiệu quả sàng lọc.</p>
                                <p><span style="color: #67ac2f;"> &#8226; </span> CKCare school được ứng dụng toàn diện trên các cấp học, bao gồm: Mầm non (12 tháng - 66 tháng) và Phổ thông (6 tuổi - 18 tuổi). </p>
                                <p><span style="color: #67ac2f;"> &#8226; </span> Nhà trường, từ nay đã có thể an tâm, với CKCare, việc phát hiện sớm các vấn đề các em đang gặp phải đã trở nên dễ dàng, nhanh chóng và chính xác.</p>
                                <p><span style="color: #67ac2f;"> &#8226; </span> Chúng ta cùng tìm hiểu cụ thể CKCare School ở từng cấp học dưới đây:</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-knowledge">
                            <div class="container aos-init aos-animate">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 video-box align-self-baseline position-relative">
                                        <img src="{{asset('assets/img/blog/video-img.jpg')}}" class="img-fluid" alt="">
                                        <a href="https://youtu.be/4nNrp49xWfE" class="glightbox play-btn mb-4"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-------- box 2 mảng chính trong ckcare school ---------->
            <div class="ckcare__total_school">
                <!------------Laptop----------->
                <div class="ckcare__school__content mx-auto">
                    <div class="row row-cols-1 row-cols-md-2 g-5">
                        <div class="col">
                            <!-- CKCare mầm non -->
                            <div class="box__preschool__tool">
                                <a href="{{route('layouts.ck_detail.ckcare_preschool')}}" class="box__link">
                                    <img src="{{asset('assets/img/blog/box_preschool.png')}}" class="card-img-top" alt="...">
                                    <div class="box__items__text">
                                        <div class="box__preschool__text">
                                            CKCARE MẦM NON<i class="bi bi-arrow-right-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="col">
                            <!-- CKCare phổ thông -->
                            <div class="box__highschool__tool">
                                <a href="{{route('layouts.ck_detail.ckcare_highschool')}}" class="box__link">
                                    <img src="{{asset('assets/img/blog/box_highschool.png')}}" class="card-img-top" alt="...">
                                    <div class="box__items__text">
                                        <div class="box__highschool__text">
                                            CKCARE PHỔ THÔNG <i class="bi bi-arrow-right-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!------------Mobile----------->
                <div class="ckcare__total__content__mobile">
                    <div class="row row-cols-1 row-cols-md-2 g-5">
                        <div class="col">
                            <!-- CKCare mầm non -->
                            <div class="box__preschool__tool">
                                <a href="{{route('layouts.ck_detail.ckcare_preschool')}}" class="box__link">
                                    <img src="{{asset('assets/img/blog/box_preschool.png')}}" class="card-img-top" alt="...">
                                    <div class="box__items__text">
                                        <div class="box__preschool__text">
                                            CKCARE MẦM NON<i class="bi bi-arrow-right-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="col">
                            <!-- CKCare phổ thông -->
                            <div class="box__highschool__tool">
                                <a href="{{route('layouts.ck_detail.ckcare_highschool')}}" class="box__link">
                                    <img src="{{asset('assets/img/blog/box_highschool.png')}}" class="card-img-top" alt="...">
                                    <div class="box__items__text">
                                        <div class="box__highschool__text">
                                            CKCARE PHỔ THÔNG <i class="bi bi-arrow-right-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @include('layouts.ck_detail.ckcare_motion')
        </div>
    </section>

    @include('layouts.team')
    @include('layouts.say')

    @include('layouts.video_source')

</main>

@endsection