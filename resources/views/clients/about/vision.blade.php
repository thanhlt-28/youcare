@extends('layouts.main')
@section('title', 'Tầm nhìn & Sứ mệnh')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-vision">
            <div class="container">
                <div class="header-hero">
                    <div class="header-hero__slogan">
                        <h2>TẦM NHÌN & SỨ MỆNH</h2>
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
                    <li class="breadcrumb-item active" aria-current="page">Tầm nhìn & Sứ mệnh</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg" style="background: none;">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>VỀ CHÚNG TÔI</h2>
                </div>
                <div class="content__vision">
                    <p>
                        YouCare là nền tảng công nghệ chăm sóc sức khỏe tinh thần cho cộng đồng được đội ngũ chuyên gia hàng đầu BrainCare xây dựng và phát triển.
                    </p>
                    <p>
                        Xã hội càng phát triển con người gặp nhiều những áp lực, sự mất kết nối, mất cân bằng… ảnh hưởng đến sức khỏe tinh thần nghiêm trọng. BrainCare với đội ngũ chuyên gia là các tiến sỹ đầu ngành về tâm lý, sức khỏe tâm thần trên 15 năm kinh nghiệm, yêu nghề, tâm huyết với nghề luôn trăn trở với những nỗi đau của cộng đồng cũng như xã hội đang gặp phải và luôn tìm giải pháp để chữa lành, để tháo gỡ.
                        <br />BrainCare ra đời với sứ mệnh “Vì cộng đồng hạnh phúc hơn từng phút giây!”
                    </p>
                    <div class="single-about">
                        <p>
                            BrainCare từng ngày góp sức làm thay đổi nhận thức và thói quen của người Việt Nam trong việc chú trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.
                        </p>
                        <div class="content-product">
                            <b>Để thực hiện sứ mệnh của mình BrainCare đã thực hiện triển khai 04 mảng chính:</b>
                            <br />
                            <a href="https://phongkhamtamly.com/"> &nbsp;(1)Tham vấn và trị liệu tâm lý, sức khỏe tâm thần </a><br />
                            <a href="https://checkingcare.vn/"> &nbsp;(2)Theo dõi và đánh giá sự phát triển của trẻ</a><br />
                            <a href="#"> &nbsp;(3)Đào tạo kỹ năng sống và đồng hành cùng học sinh/phụ huynh</a><br />
                            <a href="https://youcare.vn/"> &nbsp;(4)Ứng dụng công nghệ vào việc chăm sóc sức khỏe tinh thần</a><br />
                        </div>
                    </div>

                    <div class="single-about mt-3">
                        <h5>1. Sứ mệnh:</h5> “Vì cộng đồng hạnh phúc hơn từng phút giây!”
                    </div>
                    <div class="single-about mt-3">
                        <h5>2. Tầm nhìn: </h5> BrainCare hướng tới trở thành đơn vị dẫn đầu về lĩnh vực chăm sóc sức khoẻ tinh thần tại Việt Nam, góp phần thay đổi nhận thức của cộng đồng về sức khỏe tinh thần.
                    </div>

                    <h5 class="single-about mt-3">3. Giá trị cốt lõi : "Thấu cảm - Tận tâm - Chính trực"</h5>
                    <div class="text__indent">
                        <div class="single-about mt-0">
                            <h5 class="card-title text-succes">Thấu cảm: </h5>
                            <p class="card-text"> Lắng nghe với tâm yêu thương, đặt mình vào vị trí của khách hàng để đồng cảm, thấu hiểu và chia sẻ với khách hàng, với cộng đồng, với đồng nghiệp và tổ chức</p>
                        </div>
                        <div class="single-about mt-2">
                            <h5 class="card-title text-succes">Tận tâm:</h5>
                            <p class="card-text">
                                Luôn luôn cố gắng hết sức mình, hết khả năng của mình, toàn tâm với khách hàng, với cộng đồng, với tổ chức.<br />
                                Luôn luôn học hỏi, đổi mới sáng tạo không ngừng để tạo giá trị và trao giá trị đến khách hàng, đến cộng đồng và tổ chức.<br />
                                Luôn luôn có tinh thần khởi nghiệp, dám nghĩ, dám làm, dám tiên phong, tinh gọn và tốc độ học hỏi cải tiến nhanh.<br />
                                Luôn luôn đo lường hiệu suất, hiệu quả để tìm giải pháp kịp thời.<br />
                            </p>
                        </div>
                        <div class="single-about mt-2">
                            <h5 class="card-title text-succes">Chính trực:</h5>
                            <p class="card-text">
                                Cam kết và chịu trách nhiệm với lời hứa, với khách hàng, với cộng đồng và mục tiêu của tổ chức.<br />
                                Trung thực dám nhìn thẳng vào sự thật với chính mình, với đồng nghiệp, với tổ chức; không giấu diếm những sai phạm, lỗi lầm của mình, chấp nhận những điểm chưa tốt của bản thân để nâng chuẩn bản thân.<br />
                                Dám lên tiếng: Dũng cảm đứng ra ngăn chặn, bảo vệ những gì làm tổn hại khách hàng, cộng đồng, đồng nghiệp và tổ chức với sự chân thành và tôn trọng.<br />
                            </p>
                        </div>
                    </div>
                    <div class="single-about mt-2">
                        <h5 class="card-title mt-3">4. Triết lý vận hành: BrainCare ứng dụng triết lý đạo phật làm kim chỉ nam cho đạo đức kinh doanh "Lợi mình - Lợi người - Lợi chúng sinh"</h5>
                        <p class="card-text">
                            Đối với chính mình: Đừng làm việc nếu bạn chưa tìm thấy việc mình làm có ý nghĩa với chính cuộc sống của bạn.<br />
                            Đối với khách hàng : Đừng bán hàng/ cung cấp dịch vụ nếu chính bạn thấy rằng sản phẩm, dịch vụ mà bạn chuẩn bị cung cấp cho khách hàng không làm cho cuộc sống của khách hàng tốt lên.<br />
                            Đối với tổ chức: Đừng so sánh với người này người khác mà hãy tập trung vào chính bản thân mình sao tốt hơn, rèn nội lực của mình, tập trung vào “ Giá trị mang lại cho tổ chức”.<br />
                        </p>
                    </div>
                </div>

                <div class="row mx-auto no-padding">
                    <img class="mt-5" src="{{asset('assets/img/clients/su-menh-tam-nhin-01.png')}}" alt="">
                </div>

            </div>
        </div>
    </section><!-- End Frequently Asked Questions Section -->


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