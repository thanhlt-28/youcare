@extends('layouts.main')
@section('title', 'Sản phẩm')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-prod">
            <div class="container">
                <div class="header-hero">
                    <div class="header-hero__slogan">
                        <div class="header-prod">
                            <h2>HỆ SINH THÁI SẢN PHẨM<br />
                                NHIỀU TÍNH NĂNG VƯỢT TRỘI</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container">
            <div class="section-title">
                <h2 class="ck_header">HỆ SINH THÁI SẢN PHẨM</h2>
                <p>Cùng với đội ngũ chuyên gia hơn 15 năm kinh nghiệm đánh giá và trị liệu tâm lý, tâm lý giáo dục ở các trường nổi tiếng của Việt Nam.</p>
            </div>
            <!-- Laptop -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                <div class="col-lg-12 prod__desktop">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <div class="container__img">
                                <img src="{{asset('assets/img/blog/biz_prod.jpg')}}" alt="" class="product__img">
                                <div class="overlay">
                                    <div class="text__img">
                                        <h5 class="product__text">BizCare</h5>
                                        <hr class="product_hr" />
                                        <p class="product_text_flow">
                                            BizCare là sản phẩm công nghệ được ứng dụng vào doanh...
                                        </p>
                                        <hr class="product_hr" />
                                        <div class="btn-wrap">
                                            <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container__img">
                                <img src="{{asset('assets/img/blog/pub_prod.jpg')}}" alt="" class="product__img">
                                <div class="overlay">
                                    <div class="text__img">
                                        <h5 class="product__text">PubCare</h5>
                                        <hr class="product_hr" />
                                        <p class="product_text_flow">
                                            PubCare là sản phẩm công nghệ được ứng dụng vào việc sàng...
                                        </p>
                                        <hr class="product_hr" />
                                        <div class="btn-wrap">
                                            <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container__img">
                                <a class="text-white" href="{{route('layouts.ck_detail.ckcare_detail')}}">
                                    <img src="{{asset('assets/img/blog/ckcare_prod.jpg')}}" alt="" class="product__img">
                                    <div class="overlay">
                                        <div class="text__img">
                                            <h5 class="product__text">CKCare</h5>
                                            <hr class="product_hr" />
                                            <p class="product_text_flow">
                                                CKCare là sản phẩm công nghệ
                                                được ứng dụng trong việc theo...
                                            </p>
                                            <hr class="product_hr" />
                                            <div class="btn-wrap">
                                                <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container__img">
                                <img src="{{asset('assets/img/blog/job_prod.jpg')}}" alt="" class="product__img">
                                <div class="overlay">
                                    <div class="text__img">
                                        <h5 class="product__text">JobCare</h5>
                                        <hr class="product_hr" />
                                        <p class="product_text_flow">
                                            JobCare là nền tảng tham vấn và trị liệu cá vấn đề về tâm lý và...
                                        </p>
                                        <hr class="product_hr" />
                                        <div class="btn-wrap">
                                            <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container__img">
                                <img src="{{asset('assets/img/blog/psy_prod.jpg')}}" alt="" class="product__img">
                                <div class="overlay">
                                    <div class="text__img">
                                        <h5 class="product__text">PsyCare</h5>
                                        <hr class="product_hr" />
                                        <p class="product_text_flow">
                                            PsyCare là nền tảng tham vấn và trị liệu cá vấn đề về tâm lý và...
                                        </p>
                                        <hr class="product_hr" />
                                        <div class="btn-wrap">
                                            <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="col-lg-12 prod__mobile">
                <div class="container__img text-white" style="max-width: 100%; height:auto;">
                    <img src="{{asset('assets/img/blog/bizcare.jpg')}}" class="card-img" alt="Stony Beach" />
                    <div class="card-img-overlay">
                        <div class="text__img">
                            <h5 class="product__text">BizCare</h5>
                            <hr class="product_hr" />
                            <p class="product_text_flow">
                                BizCare là sản phẩm công nghệ được ứng dụng vào doanh...
                            </p>
                            <hr class="product_hr" />
                            <div class="btn-wrap">
                                <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container__img text-white" style="max-width: 100%; height:auto;">
                    <img src="{{asset('assets/img/blog/pubcare.jpg')}}" class="card-img" alt="Stony Beach" />
                    <div class="card-img-overlay">
                        <div class="text__img">
                            <h5 class="product__text">PubCare</h5>
                            <hr class="product_hr" />
                            <p class="product_text_flow">
                                PubCare là sản phẩm công nghệ được ứng dụng vào việc sàng...
                            </p>
                            <hr class="product_hr" />
                            <div class="btn-wrap">
                                <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container__img text-white" style="max-width: 100%; height:auto;">
                    <a class="text-white" href="{{route('layouts.ck_detail.ckcare_detail')}}">
                        <img src="{{asset('assets/img/blog/ckcare.jpg')}}" class="card-img" alt="Stony Beach" />
                        <div class="card-img-overlay">
                            <div class="text__img">
                                <h5 class="product__text">CKCare</h5>
                                <hr class="product_hr" />
                                <p class="product_text_flow">
                                    CKCare là sản phẩm công nghệ
                                    được ứng dụng trong việc theo...
                                </p>
                                <hr class="product_hr" />
                                <div class="btn-wrap">
                                    <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="container__img text-white" style="max-width: 100%; height:auto;">
                    <img src="{{asset('assets/img/blog/jobcare.jpg')}}" class="card-img" alt="Stony Beach" />
                    <div class="card-img-overlay">
                        <div class="text__img">
                            <h5 class="product__text">JobCare</h5>
                            <hr class="product_hr" />
                            <p class="product_text_flow">
                                JobCare là nền tảng tham vấn và trị liệu cá vấn đề về tâm lý và...
                            </p>
                            <hr class="product_hr" />
                            <div class="btn-wrap">
                                <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container__img text-white" style="max-width: 100%; height:auto;">
                    <img src="{{asset('assets/img/blog/psycare.jpg')}}" class="card-img" alt="Stony Beach" />
                    <div class="card-img-overlay">
                        <div class="text__img">
                            <h5 class="product__text">PsyCare</h5>
                            <hr class="product_hr" />
                            <p class="product_text_flow">
                                PsyCare là nền tảng tham vấn và trị liệu cá vấn đề về tâm lý và...
                            </p>
                            <hr class="product_hr" />
                            <div class="btn-wrap">
                                <a href="{{route('layouts.ck_detail.ckcare_detail')}}" class="btn-buy">Xem thêm &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End Pricing Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features mt-5">
        <div class="container">
            <div class="section-title">
                <h2 class="ck_header"> TÌM HIỂU THÊM</h2>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3 col-md-4">
                    <a href="https://checkingcare.vn/sang-loc-theo-doi/">
                        <div class="icon-box">
                            <i class="bi bi-shop" style="color: #ffbb2c;"></i>
                            <h3>ASQ-3</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <a href="https://checkingcare.vn/cbcl/">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                            <h3>CBCL</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <a href="https://checkingcare.vn/cham-noi/">
                        <div class="icon-box">
                            <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                            <h3>CHẬM NÓI</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <a href="https://checkingcare.vn/m-chart/">
                        <div class="icon-box">
                            <i class="bi bi-paint-bucket" style="color: #e361ff;"></i>
                            <h3>M-CHAT</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/raven/">
                        <div class="icon-box">
                            <i class="bi bi-card-list" style="color: #11dbcf;"></i>
                            <h3>RAVEN</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/epi/">
                        <div class="icon-box">
                            <i class="bi bi-pie-chart" style="color: #4233ff;"></i>
                            <h3> EPI</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/adhd/">
                        <div class="icon-box">
                            <i class="bi bi-type-underline" style="color: #b2904f;"></i>
                            <h3>ADHD</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/mbti/">
                        <div class="icon-box">
                            <i class="bi bi-disc" style="color: #b20969;"></i>
                            <h3> MBTI</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/disc/">
                        <div class="icon-box">
                            <i class="bi bi-hdd-stack" style="color: #ff5828;"></i>
                            <h3>DISC</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/danh-gia-tram-cam-beck/">
                        <div class="icon-box">
                            <i class="bi bi-filter-circle" style="color: #29cc61;"></i>
                            <h3>BECK</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/danh-gia-roi-loan-lo-au-zung/">
                        <div class="icon-box">
                            <i class="bi bi-text-paragraph" style="color: #ffa76e;"></i>
                            <h3>ZUNG</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <a href="https://checkingcare.vn/danh-gia-tong-hop-dass21/">
                        <div class="icon-box">
                            <i class="bi bi-clipboard-data" style="color: #47aeff;"></i>
                            <h3>DASS21</h3>
                        </div>
                    </a>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('assets/img/blog/img_readmore.png')}}" alt="" class="img__more">
            </div>
        </div>
    </section>
    <!-- End Features Section -->


    <section class="answer__prod">
        <div class="container">
            <div class="answer__items">
                <div class="answer__items__title">
                    <h2> CÂU HỎI THƯỜNG GẶP</h2>
                </div>
                <div class="answer__items__decs">
                    <p>Chúng tôi luôn sẵn lòng lắng nghe bạn, hãy sẻ chia với chúng tôi nhé!</p>
                </div>

                <div class="answer__items__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="answer__content__left">
                                <div class="answer__action">
                                    <button class="according"> ASQ-3 có thể được dùng để sàng lọc tự kỷ?</button>
                                    <div class="panel">
                                        <p>ASQ-3 không phải là công cụ sàng lọc tự kỷ. Tuy nhiên, ASQ-3 có đưa ra những chậm trễ liên quan đến tự kỷ và chỉ ra trẻ nào cần được đánh giá sâu hơn. ASQ3 là bộ công cụ dùng để đánh giá sự phát triển chung của trẻ, bao gồm 5 lĩnh vực: giao tiếp, vận động thô, vận động tinh, giải quyết vấn đề, cá nhân xã hội. </p>
                                    </div>
                                </div>

                                <div class="answer__action">
                                    <button class="according">Nếu kết quả M - CHAT của con tôi là “nguy cơ tự kỷ trung bình” hoặc “nguy cơ tự kỷ cao” tôi có thể tìm đến đâu?</button>
                                    <div class="panel">
                                        <p>Nếu kết quả bài test M – Chat là “nguy cơ tự kỷ trung bình” hoặc “nguy cơ tự kỷ cao”, kết quả này cho thấy con của cha mẹ đang có nhiều biểu hiện của tự kỷ. Cha mẹ nhanh chóng đưa con đến các trung tâm, cơ sở giáo dục đặc biệt uy tín để đánh giá chuyên sâu hơn cho con. </p>
                                    </div>
                                </div>

                                <div class="answer__action">
                                    <button class="according">Sử dụng công cụ CBCL để đánh giá cho đối tượng nào?</button>
                                    <div class="panel">
                                        <p>CBCL là thang đo để đánh giá các vấn đề liên quan đến tâm lý cho các em trong độ tuổi từ 6 – 18 tuổi. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="answer__content__right">
                                <div class="answer__action">
                                    <button class="according">Thang CBCL đánh giá các hội chứng, lĩnh vực nào?</button>
                                    <div class="panel">
                                        <p>Các vấn đề, hội chứng cụ thể thang đo CBCL đánh giá bao gồm: Trầm cảm, lo âu, than phiền cơ thể, rối loạn cảm xúc, rối loạn hành vi, tự làm hại mình, tự tử,...</p>
                                    </div>
                                </div>

                                <div class="answer__action">
                                    <button class="according">Mất bao lâu để hoàn thành?</button>
                                    <div class="panel">
                                        <p> Mất từ 10 – 15p để hoàn thành mỗi bài test.
                                            <br />
                                            Để đảm bảo tính khách quan và chính xác của kết quả, phụ huynh cần đọc kĩ các mệnh đề trong bài test, dựa vào thực tế quan sát để đưa ra câu trả lời sát nhất với trẻ.
                                        </p>
                                    </div>
                                </div>

                                <div class="answer__action">
                                    <button class="according">Sử dụng công cụ ADHD để đánh giá cho đối tượng nào?</button>
                                    <div class="panel">
                                        <p>Là một công cụ để đánh giá các triệu chứng của ADHD cho trẻ độ tuổi 6 đến 12. Thang được xây dựng và phát triển bởi Mark Wolraich. Bên cạnh đánh giá ADHD, thang cũng xây dựng những item đánh giá triệu chứng liên quan đến rối loạn hành vi, chống đối xã hội, lo âu, trầm cảm – những rồi loạn thường đi kèm với ADHD</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="{{route('clients.contact')}}" class="btn-answer">HỎI CHÚNG TÔI &nbsp; <i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.say')

    <!-- script to answer according -->
    <script>
        var acc = document.getElementsByClassName("according");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("action");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</main>
@endsection