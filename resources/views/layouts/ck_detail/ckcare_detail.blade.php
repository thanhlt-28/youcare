@extends('layouts.main')
@section('title', 'CKCare')
@section('content')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="bread-ckcare">
        <div class="container">
            <div class="header-hero">
                <div class="header-hero__slogan">
                    <h2>ỨNG DỤNG<br />CKCARE</h2>
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
    <!-- <div class="slogan-ckcare">
            <p class="slogan">
                <q>Không trẻ em nào bị bỏ lại phía sau</q>
            </p>
        </div> -->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.product')}}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ứng dụng CKCare</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Breadcrumbs -->

<div class="container">
    <div class="section-title">
        <h2 class="ck_header">CK<span style="color: #67ac2f">CARE</span> LÀ GÌ?</h2>
    </div>
    <div class="container__ckcare">
        <div class="row">
            <div class="col-md-6">
                <div class="ck__content">
                    <div class="ck__content_item">
                        <p><span style="color: #67ac2f;"> &#8226; </span> CKCare là sản phẩm công nghệ toàn diện ứng dụng trong theo dõi, sàng lọc & đánh giá nhằm phát hiện sớm các vấn đề liên quan đến rối loạn phát triển ở học sinh mầm non và sức khỏe tinh thần của học sinh phổ thông từ 6 - 18 tuổi.</p>
                        <p> <span style="color: #67ac2f;"> &#8226; </span> CKCare được xây dựng dựa trên nền tảng công nghệ thông minh kết hợp với kiến thức chuyên sâu về đánh giá sự phát triển của trẻ và tâm lý học đường do các chuyên gia tâm lý - giáo dục hàng đầu có trên 15 năm kinh nghiệm tại YouCare nghiên cứu và phát triển.</p>
                        <p> <span style="color: #67ac2f;"> &#8226; </span> Là công cụ phát hiện sớm những vẫn đề rối loạn phát triển và sức khỏe tâm thần cho trẻ, CKCare tập trung vào 3 nhóm đối tượng sử dụng chính gồm: Gia đình, nhà trường và tổ chức (bệnh viện, trung tâm đánh giá, trung tâm tâm lý, trung tâm dạy kĩ năng sống,...)</p>
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

        <!-------- box 3 mảng chính trong ckcare ---------->
        <div class="ckcare__total">
            <div class="ckcare__total__content mx-auto">
                <div class="row row-cols-1 row-cols-md-3 g-5">
                    <div class="col">
                        <!-- CKCare gia đình -->
                        <div class="box__family__tool">
                            <a href="{{route('layouts.ck_detail.ckcare_person')}}" class="box__link">
                                <img src="{{asset('assets/img/blog/box_family.png')}}" class="card-img-top" alt="...">
                                <div class="box__items__text">
                                    <div class="box__family__text">
                                        CKCARE GIA ĐÌNH <i class="bi bi-arrow-right-circle"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <!-- CKCare nhà trường -->
                        <div class="box__school__tool">
                            <a href="{{route('layouts.ck_detail.ckcare_school')}}" class="box__link">
                                <img src="{{asset('assets/img/blog/box_school.png')}}" class="card-img-top" alt="...">
                                <div class="box__items__text">
                                    <div class="box__school__text">
                                        CKCARE NHÀ TRƯỜNG <i class="bi bi-arrow-right-circle"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <!-- CKCare tổ chức -->
                        <div class="box__org__tool">
                            <a href="{{route('layouts.ck_detail.ckcare_org')}}" class="box__link"><img src="{{asset('assets/img/blog/box_org.png')}}" class="card-img-top" alt="...">
                                <div class="box__items__text">
                                    <div class="box__org__text">
                                        CKCARE TỔ CHỨC <i class="bi bi-arrow-right-circle"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!------------Mobile----------->
            <div class="ckcare__total__content__mobile">
                <div class="row row-cols-1 row-cols-md-1 g-3">
                    <div class="col">
                        <!-- CKCare gia đình -->
                        <div class="box__family__tool">
                            <a href="{{route('layouts.ck_detail.ckcare_person')}}" class="box__link">
                                <img src="{{asset('assets/img/blog/box_family.png')}}" class="card-img-top" alt="...">
                                <div class="box__items__text">
                                    <div class="box__family__text">
                                        CKCARE GIA ĐÌNH <i class="bi bi-arrow-right-circle"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <!-- CKCare nhà trường -->
                        <div class="box__school__tool">
                            <a href="{{route('layouts.ck_detail.ckcare_school')}}" class="box__link">
                                <img src="{{asset('assets/img/blog/box_school.png')}}" class="card-img-top" alt="...">
                                <div class="box__items__text">
                                    <div class="box__school__text">
                                        CKCARE NHÀ TRƯỜNG <i class="bi bi-arrow-right-circle"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <!-- CKCare tổ chức -->
                        <div class="box__org__tool">
                            <a href="{{route('layouts.ck_detail.ckcare_org')}}" class="box__link"><img src="{{asset('assets/img/blog/box_org.png')}}" class="card-img-top" alt="...">
                                <div class="box__items__text">
                                    <div class="box__org__text">
                                        CKCARE TỔ CHỨC <i class="bi bi-arrow-right-circle"></i>
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
</div>
@include('layouts.team')

@include('layouts.say')




@endsection