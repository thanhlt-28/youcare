@section('title', 'CHUYÊN GIA TRƯƠNG HOÀNG MAI')
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
                        <li class="breadcrumb-item active text-white" aria-current="page">CHUYÊN GIA TRƯƠNG HOÀNG MAI</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section id="team-details">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="team__img" src="{{asset('../assets/img/team/team-detail/truong-hoang-mai.jpg')}}" alt="...">
                    </div>

                    <div class="col-lg-6">
                        <div class="content__teams">
                            <h2 style="color: #a5c948; font-weight: 700">TRƯƠNG HOÀNG MAI</h2>
                            <p>
                                <b>Chuyên viên Tham vấn/ Trị liệu Tâm lý</b>
                            </p>

                            <div class="text mt-3">
                                <h5>LĨNH VỰC CHÍNH</h5>
                                <p>
                                    - Đánh giá tâm lý, tham vấn, trị liệu các vấn đề sức khoẻ tâm thần trẻ em và trẻ vị thành niên; <br />
                                    - Rối loạn trầm cảm, rối loạn lo âu, rối loạn căng thẳng ở thanh thiếu niên, rối loạn giấc ngủ, rối loạn ăn uống, rối loạn hành vi tự hại<br />
                                    - Tham vấn tạo động lực cho trẻ và vị thành niên<br />
                                    - Trị liệu nhận thức hành vi (CBT) kết hợp với nhiều liệu pháp tâm lý khác

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="content__teams">
                        <div class="text mt-3">

                            <h5>THÔNG TIN LIÊN HỆ</h5>
                            <p>
                                <span>–&nbsp;<strong>Địa chỉ:</strong> Tầng 7 toà nhà 59 Võ Chí Công, Phường Nghĩa Đô, Quận Cầu Giấy, Tp. Hà Nội, Việt Nam</span>
                            </p>
                            <p><span>– <b>Tổng đài tư vấn:<a style="color: #fff; font-weight: 500;" href="tel:19003307"> 1900 3307</a></b></span></p>

                            <p><span>– <strong>Email:</strong>&nbsp;<a style="color: #fff; font-weight: 500;" class="text-is-email" href="mailto:lienhe@braincare.vn" target="_blank" rel="noopener noreferrer">lienhe@braincare.vn</a></span></p>

                            <p><span><strong>– Website: </span></strong><a style="color: #fff; font-weight: 500;" href="https://braincare.vn/">braincare.vn</a></span></p>
                        </div>
                    </div>

                    <hr class="highligh_bottom" />
                    <!-- <h2><span style="color: #a5c948; font-size: 75%;">KINH NGHIỆM LÀM VIỆC</p></h2> -->


                    <div class="content__teams">

                        <p style="font-size: 20.8px; color: #a5c948; font-weight: 700;">QUÁ TRÌNH CÔNG TÁC</p>
                        <p>
                            - Chuyên viên tham vấn tâm lý tại Phòng tham vấn học đường trường THCS – THPT Ban Mai (2021)<br>
                            - Chuyên viên tham vấn tâm lý tại Phòng tham vấn học đường trường THCS Lê Quý Đôn -Hà Đông (2020)<br>
                            - Thực hành tham vấn tâm lý cho nạn nhân của bạo lực gia đình tại Ethiopian Community Development Council (2018)<br>
                            - Thực hành tham vấn tâm lý cho cộng đồng người vô gia cư tại Arlington Street People’s Assistance Network (A-SPAN) (2017)
                        </p>


                        <p style="font-size: 20.8px; color: #a5c948; font-weight: 700;">QUÁ TRÌNH ĐÀO TẠO</p>
                        <p>
                            - Khoá tập huấn kỹ năng tham vấn/ trị liệu tâm lý bởi Giám đốc HTX xã hội Tư vấn Neul Pum – Choi Ok Soon tại GNI (2021)<br>
                            - Khoá tập huấn Hỗ trợ tâm lý cho học sinh THCS bởi tổ chức GNI (2021)<br>
                            - Khoá tập huấn Hỗ trợ tâm lý xã hội cho bệnh nhân mắc COVID-19 và gia đình bởi Trường Đại học Sư Phạm Hà Nội (2021)<br>
                            - Cử nhân danh dự ngành Tâm lý học, chuyên ngành Tâm lý học Lâm sàng tại trường Đại học George Mason (2018)<br>
                            - Khoá tập huấn “Phòng tránh bạo lực giới” trường đại học George Mason bởi tổ chức EVERFI (2018)
                        </p>
                        <p style="font-size: 20.8px; color: #a5c948; font-weight: 700;">LĨNH VỰC CHÍNH</p>
                        <p>
                            - Đánh giá tâm lý, tham vấn, trị liệu các vấn đề sức khoẻ tâm thần trẻ em và trẻ vị thành niên; <br />
                            - Rối loạn trầm cảm, rối loạn lo âu, rối loạn căng thẳng ở thanh thiếu niên, rối loạn giấc ngủ, rối loạn ăn uống, rối loạn hành vi tự hại<br />
                            - Tham vấn tạo động lực cho trẻ và vị thành niên<br />
                            - Trị liệu nhận thức hành vi (CBT) kết hợp với nhiều liệu pháp tâm lý khác
                        </p>

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