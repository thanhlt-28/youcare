@extends('layouts.main')
@section('title', 'Đội ngũ chuyên gia')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-team">
            <div class="container">
                <div class="header-hero">
                    <div class="header-hero__slogan">
                        <h2>ĐỘI NGŨ CHUYÊN GIA</h2>
                        <div class="header___slogan">
                            <h5>Thành công của bạn là niềm vui của chúng tôi !</h5>
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
                    <li class="breadcrumb-item"><a href="{{route('clients.about.vision')}}">Giới thiệu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đội ngũ chuyên gia</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section>
        <div class="container">
            <style>
                .hover-shadow {
                    transition: .3s ease;
                }

                .hover-shadow:hover {
                    box-shadow: 0px 4px 25px 0px rgba(27, 39, 71, 0.15);
                }
            </style>
            <!-- Chuyên gia -->
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.bsdung')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Chu-Dung.png')}}" class="img-top" alt="Team Image">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">BSCC.TS.BSCKII </br>NGUYỄN VĂN DŨNG</h5>

                                <p style="color:#585858;" class="card-text text-center">Phó viện trưởng Viện sức khỏe
                                    </br>tâm thần – Bệnh viện Bạch Mai</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.bsdung')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.tspvtu')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Pham Van Tu.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">TIẾN SĨ</br>
                                    PHẠM VĂN TƯ</h5>

                                <p style="color:#585858;" class="card-text text-center">Tiến sĩ - Chuyên gia Tâm lý học</p>
                            </div>
                        </a>
                        <div class="btn-footer mt-4">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.tspvtu')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.tsnttham')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Nguyen Thi Tham.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">TIẾN SĨ</br>
                                    NGUYỄN THỊ THẮM</h5>

                                <p style="color:#585858;" class="card-text text-center">Tiến sĩ - Chuyên gia Tâm lý học</p>
                            </div>
                        </a>
                        <div class="btn-footer mt-4">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.tsnttham')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.tsphuong')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Nguyen Minh Phuong.png')}}" class="img-top" alt="Team Image">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">TIẾN SĨ </br>NGUYỄN MINH PHƯỢNG</h5>

                                <p style="color:#585858;" class="card-text text-center">Tiến sĩ chuyên ngành:
                                    </br> Giáo dục đặc biệt</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.tsphuong')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">

                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.thsthuy')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Hoang Le Thuy.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    HOÀNG LÊ THỦY</h5>

                                <p style="color:#585858;" class="card-text text-center">Thạc sĩ Tâm lý học lâm sàng</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsthuy')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.thsnttvan')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Nguyen Thanh Van.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN THỊ THANH VÂN</h5>

                                <p style="color:#585858;" class="card-text text-center">Thạc sĩ tham vấn & trị liệu tâm lý</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsnttvan')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.thsntthang')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Nguyen Thuy Hang.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN THỊ THÚY HẰNG</h5>

                                <p style="color:#585858;" class="card-text text-center">Thạc sĩ ngành Giáo dục học</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsntthang')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.thsnhminh')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Nguyen Hien Minh.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN HIỀN MINH</h5>

                                <p style="color:#585858;" class="card-text text-center">Thạc sĩ ngành Công tác xã hội</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsnhminh')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 justify-content-center row-cols-md-4 g-4 mt-2">
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.thslthanh')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Le The Hanh.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    LÊ THẾ HANH</h5>

                                <p style="color:#585858;" class="card-text text-center">Thạc sĩ
                                    Tâm lý học Lâm sàng</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thslthanh')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.thsdmkhue')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Dang Minh Khue.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    ĐẶNG MINH KHUÊ</h5>

                                <p style="color:#585858;" class="card-text text-center">Thạc sĩ
                                    Tâm lý học Lâm sàng</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsdmkhue')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__items card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.thmai')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/Truong Hoang Mai.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">CHUYÊN GIA</br>
                                    TRƯƠNG HOÀNG MAI</h5>

                                <p style="color:#585858;" class="card-text text-center">Chuyên viên tham vấn/ Trị liệu Tâm lý</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thmai')}}" type="button" class="btn btn-outline-succeed rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- End Chuyên gia -->
        </div>

    </section>

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