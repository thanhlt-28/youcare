@section('title', 'TS. BSCK II NGUYỄN VĂN DŨNG')
@section('content')
@extends('layouts.main')

<main id="main">
    <article class="team__details">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.about.team_experts')}}">Đội ngũ chuyên gia</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">TS. BSCK II NGUYỄN VĂN DŨNG</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section id="team-details">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="team__img" src="https://braincare.vn/wp-content/uploads/2021/04/chu-dung.jpg" alt="...">
                    </div>

                    <div class="col-lg-6">
                        <div class="content__teams">
                            <h4 style="color: #a5c948;">TS. BSCKII NGUYỄN VĂN DŨNG</h4>
                            <p>
                                <b>Phó viện trưởng Viện sức khỏe tâm thần Bệnh viện Bạch Mai Hà Nội</b>
                            </p>
                            <div class="text mt-3">
                                <h5>THÀNH TÍCH</h5>
                                <p> – Bằng khen của chủ tịch nước, của tổng bí thư và phó thủ tướng nước CNHXCN Việt Nam trao tặng<br />
                                    – Bằng khen của bộ trưởng bộ y tế… và các cấp khác<br />
                                </p>
                                <div class="slider-teams">
                                    <h5>THÔNG TIN LIÊN HỆ</h5>
                                    <p>
                                        <span>–&nbsp;<strong>Địa chỉ:</strong> Tầng 7 toà nhà 59 Võ Chí Công, Phường Nghĩa Đô, Quận Cầu Giấy, Tp. Hà Nội, Việt Nam</span>
                                    </p>
                                    <p><span>– <b>Tổng đài tư vấn:<a style="color: #fff; font-weight: 500;" href="tel:19003307"> 1900 3307</a></b></span></p>

                                    <p><span>– <strong>Email:</strong>&nbsp;<a style="color: #fff; font-weight: 500;" class="text-is-email" href="mailto:lienhe@braincare.vn" target="_blank" rel="noopener noreferrer">lienhe@braincare.vn</a></span></p>

                                    <p><span><strong>– Website: </span></strong><a style="color: #fff; font-weight: 500;" href="https://braincare.vn/">braincare.vn</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="highligh_bottom" />

                <h2>
                    <span style="color: #a5c948; font-size: 75%;">KINH NGHIỆM LÀM VIỆC CÁ NHÂN</span>
                </h2>
                <div class="content__teams">
                    <p><b>Tiến sĩ Bác sĩ Chuyên khoa 2 Nguyễn Văn Dũng</b>&nbsp;là bác sĩ Cao cấp hàng đầu của&nbsp;<b>Viện sức khỏe tâm thần – Bệnh viện Bạch Mai.</b>&nbsp;</p>

                    <p>&nbsp; &nbsp;Là người thầy luôn tận tâm với bệnh nhân, với nhiều năm kinh nghiệm công tác tại các Bệnh viện tuyến đầu Việt Nam về lĩnh vực “<b>Sức khỏe tâm thần</b>” đã giúp cho rất nhiều bệnh nhân có thể trở lại cuộc sống bình thường.&nbsp;</p>
                    <p>&nbsp; &nbsp;<b>TS. BSCK II Nguyễn Văn Dũng</b>&nbsp;trong quá trình công tác của mình đã có rất nhiều “Bằng khen”&nbsp; mà trong đó có danh hiệu rất cao quý của người thầy thuốc:&nbsp;<b>“Thầy thuốc Ưu tú”</b>&nbsp;do Thủ tướng chính phủ nhà nước Cộng hòa xã hội chủ nghĩa Việt Nam khen tặng. Với nhiều thành tích đóng góp trong công tác phòng, chống và cống hiến trong sự nghiệp bảo vệ và nâng cao Sức khỏe của nhân dân.</p>
                    <p>&nbsp; &nbsp;Ngoài vai trò là người thầy thuốc chữa bệnh cho rất nhiều bệnh nhận, thầy còn đảm nhiệm thêm một vai trò vô cùng to lớn nữa đó là: Tham gia đào tạo nâng cao trình độ của các cán bộ trong ngành, giảng dạy các sinh viên của các Trường đại học nhằm xây dựng đội ngũ y bác sĩ kế cận trong tương lai cho đất nước( như:&nbsp;<b>Đại học Y Hà Nội, Đại học Y Hải Phòng, Đại học Y Tây Nguyên</b>).&nbsp;</p>
                </div>

                <div class="mt-5">
                    <h5 style="color: #a5c948;">DANH HIỆU CAO QUÍ NHÀ NƯỚC CHXHCN VIỆT NAM TRAO TẶNG</h5>
                </div>
                @include('layouts.danh_hieu')
            </div>

        </section>
    </article>

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