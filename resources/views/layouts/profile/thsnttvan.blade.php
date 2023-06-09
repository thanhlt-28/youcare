@section('title', 'THS NGUYỄN THỊ THANH VÂN')
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
                        <li class="breadcrumb-item active text-white" aria-current="page">THS NGUYỄN THỊ THANH VÂN</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section id="team-details">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="team__img" src="https://braincare.vn/wp-content/uploads/2022/05/Nguyen-Thanh-Van.png" alt="...">
                    </div>

                    <div class="col-lg-6">
                        <div class="content__teams">
                            <h2 style="color: #a5c948; font-weight: 700">NGUYỄN THỊ THANH VÂN</h2>
                            <p>
                                <b>Thạc sĩ chuyên ngành tham vấn trị liệu tâm lý (Master Counseling and Psychotherapy) - Chuyên gia tham vấn trị liệu </b>
                            </p>

                            <div class="text mt-3">
                                <h5>LĨNH VỰC CHUYÊN MÔN</h5>

                                <p> &#8226; Tham vấn cặp đôi, tham vấn hôn nhân gia đình<br />
                                    &#8226; Tham vấn giáo dục con<br />
                                    &#8226; Tham vấn mối quan hệ<br />
                                    &#8226; Trị liệu căng thẳng<br />
                                    &#8226; Trị liệu khủng hoảng tâm lý<br />
                                    &#8226; Trị liệu sang chấn/ tổn thương tâm lý<br />
                                    &#8226; Trị liệu trầm cảm<br />
                                    &#8226; Trị liệu RLCX<br />
                                    &#8226; Trị liệu rối loạn lo âu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__teams">
                    <div class="text">
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
                <!-- <h2><span style="color: #a5c948; font-size: 75%;">KINH NGHIỆM LÀM VIỆC</p>
        </h2> -->
                <div class="content__teams">

                    <p>
                        <span style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">KINH NGHIỆM LÀM VIỆC</span>
                    </p>

                    <p>
                        – Là hội viên Hội tâm lý trị liệu Việt Nam<br>
                        – 7 năm làm việc trong lĩnh vực tham vấn trị liệu tâm lý<br>
                        – Hơn 15 năm làm việc trong lĩnh vực phát triển con người<br>
                        – Tham vấn/ trị liệu hàng nghìn phiên với nhiều đối tượng thân chủ khác nhau:
                        Phụ huynh, cặp đôi, trẻ vị thành niên<br>
                        Các đơn vị/tổ chức đã từng và đang công tác:<br>
                        + TTCSKH BrainCare<br>
                        + Phòng tâm lý Phúc Ngân<br>
                        + Nhà tâm lý học Việt Nam<br>
                        + Phòng tâm lý Nhất Tâm Minh<br>
                        + Phòng tâm lý An Bình<br>
                        + Tổ chức phi chính phủ cứu trợ trẻ em đường phố và nạn nhân mua bán người Rồng Xanh (Blue Dragon)
                    </p>

                    <p style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">ĐÀO TẠO</p>
                    <p>
                        – Cao học chuyên ngành tham vấn trị liệu tâm lý (Tổ chức IBAM Ấn Độ)<br>
                        – Master trị liệu dòng thời gian ((ABM Hoa Kỳ)<br>
                        – Master NLP (ABM Hoa Kỳ)<br>
                        – Thôi miên trị liệu (Úc)<br>
                        – Hỗ trợ dựa trên hiểu biết về rối loạn căng thẳng sau sang chấn (Blue Dragon)<br>
                        – Nhà Thực hành liệu pháp nhận thức hành vi (CBT Practictioner) (Udemy)<br>
                        – Ứng dụng liệu pháp thư giãn trong trị liệu rối loạn do căng thẳng (Hội tâm lý trị liệu VN)<br>
                        – Liệu pháp trị liệu nhận thức hành vi cho trầm cảm, lo âu, sợ hãi và hoảng loạn (DAP) (Udemy)<br>
                        – Liệu pháp trị liệu hệ thống hiện đại hiệu quả (REBT) Udemy<br>
                        – Liệu pháp giãi mẫn cảm bằng chuyển động nhãn cầu mắt (Viện EMDR)
                    </p>
                    <p style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">BẰNG CẤP</p>

                    <p>
                        - Thạc sĩ chuyên nghĩ tham vấn trị liệu tâm lý (Master Counseling and Psychotherapy)<br>
                        - Cử nhân luật học<br>
                        - Cử nhân VHQC<br>
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