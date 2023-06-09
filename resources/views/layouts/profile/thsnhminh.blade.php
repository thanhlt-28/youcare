@section('title', 'THS NGUYỄN HIỀN MINH')
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
                        <li class="breadcrumb-item active text-white" aria-current="page">TH.S NGUYỄN HIỀN MINH</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <section id="team-details">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="team__img" src="https://braincare.vn/wp-content/uploads/2022/05/Nguyen-Hien-Minh.png" alt="...">
                    </div>

                    <div class="col-lg-6">
                        <div class="content__teams">
                            <h2 style="color: #a5c948; font-weight: 700">NGUYỄN HIỀN MINH</h2>
                            <p>
                                <b>Thạc sĩ chuyên ngành: Công tác xã hội</b>
                            </p>

                            <div class="text mt-3">
                                <h5>THÀNH TÍCH</h5>
                                <p>

                                    – Quản lý ca và thực hành tham vấn hỗ trợ tâm lý trị liệu với hơn 300 thân chủ tại hai nhà tạm lánh dành cho nạn nhân bị buôn bán và bạo lực gia đình từ 2006 – 2014.<br />

                                    – Quản lý ca với trên 100 thân chủ là những phụ nữ bán dâm và nghiện ma túy, bị bạo lực gai đình, di cư từ tháng 4/2014 đến tháng 11/2015.<br />

                                    – Tham gia xây dựng và thiết kế bộ hồ sơ quản lý ca của hai nhà tạm lánh – Trung tâm Phụ nữ và Phát triển từ 2006 đến 2011.<br />
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="content__teams">
                        <div class="text mt-3">
                            <h5>LĨNH VỰC CHÍNH</h5>
                            <p>
                                – Nơi đào tạo: Trường Đại học Lao động và Xã hội; Trường Đại học Khoa học xã hội và nhân văn – Đại học Quốc gia Hà Nội.<br />

                                – Ngành học: Công tác xã hội<br />
                            </p>
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
                        <p style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">KINH NGHIỆM LÀM VIỆC</p>

                        <p>– Hơn 8 năm kinh nghiệm và làm việc tại Trung tâm Phụ nữ và Phát triển – Hội LHPN Việt Nam. Quản lý ca và tham vấn hỗ trợ tâm lý cho hơn 300 khách hàng là phụ nữ, trẻ em gái bị ảnh hưởng và là nạn nhân của bạo lực giới, bạo lực gia đình.</p>
                        <p>– Gần 2 năm kinh nghiệm và làm việc tại Trung tâm nghiên cứu và ứng dụng khoa học về Giới – Gia đình – Phụ nữ và Vị thành niên CSAGA. Phụ trách dự án và hỗ trợ tâm lý; kỹ năng sống; tham vấn hướng nghiệp và kết nối hỗ trợ sinh kế cho hơn 100 khách hàng là phụ nữ, trẻ em gái lao động tình dục, di cư, nạn nhân của buôn bán người và bạo lực gia đình.</p>

                        <p style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">KINH NGHIỆM HỖ TRỢ NHÓM</p>
                        <p>– Có 10 năm làm quản lý và trực tiếp điều hành tham vấn, trị liệu tâm lý và huấn luyện kỹ năng cho các nhóm phụ nữ, trẻ em gái là nạn nhân của buôn bán người, bạo lực gia đình, lao động tình dục, di cư… tại Ngôi Nhà Bình Yên – Trung tâm Phụ nữ và Phát triển – Hội LHPN VN và Trung tâm nghiên cứu – ứng dụng khoa học về Giới – Gia đình – Phụ nữ và Vị thành niên CSAGA.</p>
                        <p style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">KINH NGHIỆM ĐÀO TẠO – HUẤN LUYỆN</p>
                        <p>– Đào tạo chuyên môn: Giảng dạy các môn chuyên ngành Công tác xã hội; nghiệp vụ trong đào tào tạo, bồi dưỡng cán bộ Hội Nông dân Việt Nam các cấp từ tháng 3/2015 đến nay.</p>
                        <p>– Huấn luyện kỹ năng: Huấn luyện và giảng dạy các lớp Kỹ năng sống, kỹ năng mềm, giá trị sống… cho các nhóm đối tượng Sinh viên, học sinh mầm non tới Trung học phổ thông.</p>
                        <p style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">TẬP HUẤN, ĐÀO TẠO GIẢNG VIÊN TỐT</p>
                        <p>– Tập huấn về kiên thức, đào tạo giảng viên nguồn về BLGD, phòng chống buôn bán người cho cán bộ cơ sở Hội Phụ nữ, Hội Nông dân tại các địa phương như: Bắc Ninh, Hà Nam, Hà Nội, Hòa Bình, Ninh Bình… từ 2014 đến nay</p>
                        <p>– Đào tạo giảng viên nguồn kỹ năng sống cho Trung tâm kỹ năng sống Việt</p>
                        <p style="font-size: 20.8px; color: #a5c948; font-weight: bolder;">MỘT SỐ THÀNH TỰU</p>
                        <p>– Là khách mời chuyên gia của các chương trình Talk show về chủ đề gia đình, phụ nữ, trẻ em, thanh niêm và kỹ năng sống của Đài truyền hình Việt Nam; Báo Phụ nữ Việt Nam và Báo Lao động – Xã hội.</p>
                        <p>– Tham gia xây dựng tài liệu truyền thông về BLGD gồm: Các câu chuyện điển hình; Làm cha mẹ phòng chống BLGD; Thay đổi để đổi thay…và một số tờ rơi giới thiệu tổ chức, văn phòng hỗ trợ nạn nhân…năm 2015 tại CSAGA.</p>
                        <p>– Phối hợp với Báo Gia đình – Xã hội và Báo Lao động – Xã hội tổ chức cuộc thi dành cho nhà báo, phóng viên viết về cuộc sống của nữ lao động tình dục mang tên: “Khát vọng yêu thương” từ tháng 5/2014 đến tháng 9/2014 trong khuôn khổ dự án “Hỗ trợ nghiên cứu, xây dựng chính sách và thí điểm mô hình hòa nhập cộng đồng cho nữ lao động tại Hà Nội” của Cục phòng chống tệ nạn xã hội và tổ chức PLAN tài trợ.</p>

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