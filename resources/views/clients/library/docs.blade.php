@extends('layouts.main')
@section('title', 'Tài liệu')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h1 class="text-uppercase mb-3">Tài liệu</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tài liệu</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->


    <!-- =====Tài liệu===== -->
    <section class="container-fluild" data-aos="fade-in">

        <div class="container">
            <!-- ====== Card ======== -->
            <div class="row row-cols-12">
                <div class="col-lg-8 col-md-8">
                    <div class="row row-cols-4 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('assets/img/blog/qt-gv.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a short card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a short card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="server/assets/img/news-3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination with icons -->
                    <nav aria-label="Page navigation example" class="pagination justify-content-center mt-2">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav><!-- End Pagination with icons -->


                    <!-- ====== Accordion ======== -->

                    <div class="col-lg-12 mt-5">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Accordion without outline borders</h5>

                                <!-- Accordion without outline borders -->
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                        </div>
                                    </div>
                                </div><!-- End Accordion without outline borders -->

                            </div>
                        </div>

                    </div>
                    <!-- ====== Card left ======== -->
                    <style>
                        /* Accordion */
                        .accordion-item {
                            border: 1px solid #ebeef4;
                        }

                        .accordion-button:focus {
                            outline: 0;
                            box-shadow: none;
                        }

                        .accordion-button:not(.collapsed) {
                            color: #012970;
                            background-color: #f6f9ff;
                        }

                        .accordion-flush .accordion-button {
                            padding: 15px 0;
                            background: none;
                            border: 0;
                        }

                        .accordion-flush .accordion-button:not(.collapsed) {
                            box-shadow: none;
                            color: #4154f1;
                        }

                        .accordion-flush .accordion-body {
                            padding: 0 0 15px 0;
                            color: #3e4f6f;
                            font-size: 15px;
                        }
                    </style>
                    <div class="card-left">
                        <div class="card mt-5">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="server/assets/img/card.jpg" width="50%" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card with an image on left</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mt-2">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="server/assets/img/card.jpg" width="50%" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card with an image on left</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 mt-2">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="server/assets/img/card.jpg" width="50%" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card with an image on left</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="server/assets/img/news-1.jpg" alt="">
                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="server/assets/img/news-2.jpg" alt="">
                                    <h4><a href="#">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="server/assets/img/news-3.jpg" alt="">
                                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="server/assets/img/news-4.jpg" alt="">
                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="server/assets/img/news-5.jpg" alt="">
                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                                </div>

                                <style>
                                    .filter {
                                        position: absolute;
                                        right: 0px;
                                        top: 15px;
                                    }

                                    .card-title {
                                        margin-bottom: 0.5rem;
                                    }

                                    .news h4 a {
                                        color: #94c045;
                                        transition: 0.3s;
                                    }

                                    .news h4 {
                                        font-size: 15px;
                                        margin-left: 95px;
                                        font-weight: bold;
                                        margin-bottom: 5px;
                                    }

                                    .news img {
                                        width: 80px;
                                        float: left;
                                        border-radius: 5px;
                                    }

                                    img,
                                    svg {
                                        vertical-align: middle;
                                    }

                                    p {
                                        margin-top: 0;
                                        margin-bottom: 1rem;
                                    }

                                    .news p {
                                        font-size: 14px;
                                        color: #777777;
                                        margin-left: 95px;
                                    }

                                    p {
                                        margin-top: 0;
                                        margin-bottom: 1rem;
                                    }
                                </style>
                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--===== End Tài liệu ======-->



    <!-- ======= Cộng đồng ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">

            <div class="text-center">
                <h3>Cộng đồng</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Tham gia ngay</a>
            </div>

        </div>
    </section>
    <!--===== End CĐ Section ======-->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5">
        <!-- <div class="main_form"> -->
        <div class="container">

            <div class="row">
                <div class="card-body">
                    <div class="section-title">
                        <h2 class="ck_header">ĐĂNG KÝ TƯ VẤN</h2>
                    </div>
                    <p style="margin-top: -30px;" class="text-center">
                        Chúng tôi luôn sẵn lòng lắng nghe bạn, hãy sẻ chia với chúng tôi nhé!
                    </p>
                </div>
                <div class="col-lg-6 mt-lg-0">

                    <div id="getfly-optin-form-iframe-1646904312118"></div>
                    <script type="text/javascript">
                        (function() {
                            var r = window.document.referrer != "" ? window.document.referrer : window.location.origin;
                            var regex = /(https?:\/\/.*?)\//g;
                            var furl = regex.exec(r);
                            r = furl ? furl[0] : r;
                            var f = document.createElement("iframe");
                            const url_string = new URLSearchParams(window.location.search);
                            var utm_source, utm_campaign, utm_medium, utm_content, utm_term, utm_user, utm_account;
                            if ((!url_string.has('utm_source') || url_string.get('utm_source') == '') && document.cookie.match(new RegExp('utm_source' + '=([^;]+)')) != null) {
                                r += "&" + document.cookie.match(new RegExp('utm_source' + '=([^;]+)'))[0];
                            } else {
                                r += url_string.get('utm_source') != null ? "&utm_source=" + url_string.get('utm_source') : "";
                            }
                            if ((!url_string.has('utm_campaign') || url_string.get('utm_campaign') == '') && document.cookie.match(new RegExp('utm_campaign' + '=([^;]+)')) != null) {
                                r += "&" + document.cookie.match(new RegExp('utm_campaign' + '=([^;]+)'))[0];
                            } else {
                                r += url_string.get('utm_campaign') != null ? "&utm_campaign=" + url_string.get('utm_campaign') : "";
                            }
                            if ((!url_string.has('utm_medium') || url_string.get('utm_medium') == '') && document.cookie.match(new RegExp('utm_medium' + '=([^;]+)')) != null) {
                                r += "&" + document.cookie.match(new RegExp('utm_medium' + '=([^;]+)'))[0];
                            } else {
                                r += url_string.get('utm_medium') != null ? "&utm_medium=" + url_string.get('utm_medium') : "";
                            }
                            if ((!url_string.has('utm_content') || url_string.get('utm_content') == '') && document.cookie.match(new RegExp('utm_content' + '=([^;]+)')) != null) {
                                r += "&" + document.cookie.match(new RegExp('utm_content' + '=([^;]+)'))[0];
                            } else {
                                r += url_string.get('utm_content') != null ? "&utm_content=" + url_string.get('utm_content') : "";
                            }
                            if ((!url_string.has('utm_term') || url_string.get('utm_term') == '') && document.cookie.match(new RegExp('utm_term' + '=([^;]+)')) != null) {
                                r += "&" + document.cookie.match(new RegExp('utm_term' + '=([^;]+)'))[0];
                            } else {
                                r += url_string.get('utm_term') != null ? "&utm_term=" + url_string.get('utm_term') : "";
                            }
                            if ((!url_string.has('utm_user') || url_string.get('utm_user') == '') && document.cookie.match(new RegExp('utm_user' + '=([^;]+)')) != null) {
                                r += "&" + document.cookie.match(new RegExp('utm_user' + '=([^;]+)'))[0];
                            } else {
                                r += url_string.get('utm_user') != null ? "&utm_user=" + url_string.get('utm_user') : "";
                            }
                            if ((!url_string.has('utm_account') || url_string.get('utm_account') == '') && document.cookie.match(new RegExp('utm_account' + '=([^;]+)')) != null) {
                                r += "&" + document.cookie.match(new RegExp('utm_account' + '=([^;]+)'))[0];
                            } else {
                                r += url_string.get('utm_account') != null ? "&utm_account=" + url_string.get('utm_account') : "";
                            }
                            r += "&full_url=" + encodeURIComponent(window.location.href);
                            f.setAttribute("src", "https://braincare.getflycrm.com/api/forms/viewform/?key=Ik7DLMQTQ24sVlDCqhaeG63BfeM26LncaV1Fauer5ukHz43p2M&referrer=" + r);
                            f.style.width = "100%";
                            f.style.height = "600px";
                            f.setAttribute("frameborder", "0");
                            f.setAttribute("marginheight", "0");
                            f.setAttribute("marginwidth", "0");
                            var s = document.getElementById("getfly-optin-form-iframe-1646904312118");
                            s.appendChild(f);
                        })();
                    </script>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Địa chỉ/ Location:</h4>
                            <p>- Tầng 7, 59 Võ Chí Công, Cầu Giấy, Hà Nội</p>
                            <p>- 7th floor, 59 Vo Chi Cong street, Cau Giay District, Ha Noi</p>
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


            </div>

        </div>
    </section>
    <!-- End Contact Section -->
</main>
@endsection