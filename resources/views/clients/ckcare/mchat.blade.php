@extends('layouts.main')
@section('title', 'M-CHAT')
@section('content')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="breadcrumb-ckcare"></div>
    <div class="bread-pre-school">
        <div class="container">
            <div class="header-hero">
                <div class="header-hero__slogan">
                    <h2>Hãy bắt đầu theo dõi & sàng lọc <br /> cho trẻ ngay từ hôm nay!</h2>
                </div>
                <div class="header__btn__cta">
                    <a href="https://ck.youcare.vn/user/login" target="_blank">
                        <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="slogan-ckcare">
        <p class="slogan">
            <q>Không trẻ em nào bị bỏ lại phía sau</q>
        </p>
    </div>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <<li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('layouts.ck_detail.ckcare_school')}}">Trường học</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thang đo M-Chat</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Breadcrumbs -->
<section id="pricing" class="pricing">

    <div class="section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Thang đo M-Chat</h2>
    </div>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-content">
                            <p><i class="bi bi-play-circle"></i> M-CHAT – bảng kiểm tự kỷ dành cho trẻ nhỏ – là một công cụ có giá trị sàng lọc trẻ em từ 16 đến 30 tháng tuổi nhằm đánh giá nguy cơ mắc phải các rối loạn phổ tự kỷ.
                            </p>
                            <p><i class="bi bi-play-circle"></i> Bảng kiểm gồm 20 câu, trong đó có 11 câu quan trọng được in đậm, được thực hiện bởi người chăm sóc cha/mẹ hoặc ông/bà… dưới sự hướng dẫn của cán bộ y tế.</p>
                            <p><i class="bi bi-play-circle"></i> M-CHAT được giới thiệu bởi nhiều tổ chức có uy tín như Tổ chức Tự kỷ lên tiếng, Trung tâm phòng chống dịch bệnh Mỹ và sử dụng rộng rãi trên thế giới.</p>
                            <p><i class="bi bi-play-circle"></i> Rối loạn phổ tự kỷ là một dạng khuyết tật ảnh hưởng đến chức năng hoạt động của não, tồn tại suốt đời, thường xuất hiện trước 3 tuổi. Việc phát hiện sớm sớm, can thiệp sớm là điều rất quan trọng, là một trong những yếu tố quyết định mức độ hòa nhập của các con. Vậy ai là người phát hiện giúp sàng lọc chẩn đoán sớm?
                            </p>
                            <p><i class="bi bi-play-circle"></i> Một trong những công cụ sàng lọc trẻ tựu kỉ được sử dụng phổ biến đó là bảng sàng lọc M – CHAT.</p>

                        </div>
                        <a href="https://checkingcare.vn/m-chart/" target="_blank">Xem thêm <i class="bi bi-arrow-right"></i></a>


                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <h3 class="sidebar-title">Bộ công cụ khác</h3>
                        <section id="features" class="features" data-aos="fade-up">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <a href="{{route('clients.ckcare.asq3')}}" target="_blank">
                                        <div class="icon-box">
                                            <i class="bi bi-shop" style="color: #e80368;"></i>
                                            <h3>ASQ-3</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <a href="{{route('clients.ckcare.cbcl')}}" target="_blank">
                                        <div class="icon-box">
                                            <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                                            <h3>CBCL</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 col-md-12 mt-3">
                                    <a href="{{route('clients.ckcare.adhd')}}" target="_blank">
                                        <div class="icon-box">
                                            <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                                            <h3>ADHD</h3>
                                        </div>
                                    </a>
                                </div>

                                <div class="container d-flex justify-content-center mt-5">
                                    <a href="https://ck.youcare.vn/user/login" target="_blank">
                                        <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->
            </div>
        </div>
    </section><!-- End Blog Single Section -->

    <div class="section-title mt-5" data-aos="fade-up">
        <h2 class="text-uppercase">Đối tượng sử dụng</h2>
    </div>

    @include('layouts.ck_detail.ck_tabs')

    <!-- Slider team # Laptop -->
    <section class="slider-teams" data-aos="fade-up">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8 align-self-baseline position-relative">
                        <div class="section-title">
                            <h2>ĐỘI NGŨ CHUYÊN GIA</h2>
                        </div>

                        <div class="content">
                            <div class="slider-92911">
                                <div class="owl-carousel slide-one-item">

                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/chu-dung.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.bsdung')}}">TS. BSCK II NGUYỄN VĂN DŨNG</a></h4>
                                            <strong>Tiến sĩ Bác sĩ Chuyên khoa II. Thầy thuốc ưu tú của Viện sức khỏe tâm thần – Bệnh viện Bạch Mai.</strong>
                                            <p>- Hơn 30 năm trong lĩnh vực điều trị các rối loạn tâm thần, các rối loạn phát triển ở trẻ em, cai nghiện game, internet, rượu...</p>
                                            <p>- Có nhiều thành tích cao quí được chủ tích nước, tổng bí thư, thủ tướng trao tặng.</p>
                                            <p>- Rối loạn thần kinh thực vật; Động kinh; Trầm cảm; Lo âu; Mất ngủ; Stress…</p>
                                            <p>- Cai nghiện ma tuý, ma tuý đá, cỏ Mỹ, game online,…</p>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.bsdung')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->

                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Pham Van Tu.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.tspvtu')}}">PHẠM VĂN TƯ</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><strong>Tiến sĩ Tâm lý học</strong></span></p>
                                                    <p><strong>– Phó trưởng Khoa Công tác xã hội, trường Đại học Sư phạm Hà Nội</strong></span></p>
                                                    <p>
                                                        &nbsp;Khoa Công tác xã hội, Trường Đại học Sư phạm Hà Nội, Giảng viên, trưởng bộ môn Cơ sở Công tác xã hội.</span>
                                                    </p>
                                                    <p>
                                                        <strong>– </strong>Tập huấn thường niên cho trường Bồi dưỡng cán bộ giáo dục Hà Nội về các chuyên đề “tư vấn học đường” dành cho cán bộ quản lý và giáo viên các trường phổ thông làm công tác tư vấn tâm lí trong trường học.</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.tspvtu')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->

                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Nguyen Thi Tham.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.tsnttham')}}">NGUYỄN THỊ THẮM</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span style="font-size: 120%; color: #54595f;"><strong>Tiến sĩ ngành tâm lý – giáo dục</strong></span></p>
                                                    <p><span style="color: #54595f;"><strong> Bằng khen của Hội khuyến học Việt Nam, Hội khoa học Tâm lý – Giáo dục Việt Nam</strong> về có nhiều đóng góp trong việc hỗ trợ, can thiệp tâm lý cho trẻ em có nhu cầu đặc biệt.</span></p>
                                                    <p><span style="color: #54595f;"><strong>– Tham gia nhiều khoá học về lĩnh vực tâm lý trị liệu ở trong và ngoài nước</strong>&nbsp;như: Trầm cảm sau sang chấn, rối loạn hành vi cảm xúc, Giáo dục kĩ năng sống, giá trị sống cho trẻ em, bạo lực học đường, bạo lực gia đình, Tham vấn cá nhân, tham vấn nhóm, Tư duy tích cực; Chẩn đoán đánh giá các rối nhiều tâm lý ở trẻ em,….</span></p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.tsnttham')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->

                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Nguyen Mai Huong.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.tsntmhuong')}}">NGUYỄN THỊ MAI HƯƠNG</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span style="font-size: 120%;"><strong>Tiến sĩ chuyên ngành: Tâm lý học</strong></span></p>
                                                    <p>– Cử nhân, chuyên ngành Sư phạm Tâm lý giáo dục, Đại học Sư phạm Hà Nội năm 2006.</p>
                                                    <p>– Thạc sĩ, chuyên ngành Tâm lý học, Đại học Sư phạm Hà Nội, 2010.</p>
                                                    <p>– Tiến sĩ, chuyên ngành Tâm lý học, Đại học Sư phạm Hà Nội, 2020…&nbsp;</p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.tsntmhuong')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->

                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Nguyen Thanh Van.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.thsnttvan')}}">NGUYỄN THỊ THANH VÂN</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span style="font-size: 120%;"><strong>Thạc sĩ tham vấn &amp; trị liệu tâm lý</strong></span></p>
                                                    <p>– Thạc sĩ tham vấn và trị liệu tâm lý/Masters Counselling and Psychotherapy – IBAM (Ấn Độ)<br>
                                                        – Chuyên gia tham vấn cao cấp về hôn nhân gia đình, nuôi dạy con, mối quan hệ cặp đôi.<br>
                                                        – Chuyên gia tư vấn định hướng phát triển bản thân, tư vấn nghề nghiệp và sức khoẻ tinh thần trong công việc<br>
                                                        – Chuyên gia tham vấn tâm lý cho thanh thiếu niên về các khó khăn trong học tập, mối quan hệ, cuộc sống.<br>
                                                        – Master Coach NLP và Thôi miên Trị liệu</p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.thsnttvan')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->


                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Nguyen Thuy Hang.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.thsntthang')}}">NGUYỄN THỊ THÚY HẰNG</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span style="font-size: 120%;"><strong>Thạc sĩ chuyên ngành:&nbsp; Giáo dục học</strong></span></p>
                                                    <p>– Sinh viên giỏi, sinh viên xuất sắc cấp khoa, Sinh viên nghiên cứu khoa học cấp trường</p>
                                                    <p>– Tham gia nhiều hoạt động thiện nguyện cho trẻ em: Dạy học tình nguyện, Tình nguyện viên cho làng trẻ mồ côi SOS, giảng dạy KNS tại tổ chức Nghị lực sống cho người khuyết tật, Dự án hỗ trợ phụ nữ và trẻ em ung thư…</p>
                                                    <p>– Giảng viên thỉnh giảng cho một số trường Đại học: Đại học Văn hóa, ĐH Công đoàn, ĐH Lao động – xã hội, ĐH Hòa Bình…&nbsp;</p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.thsntthang')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->

                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Nguyen Hien Minh.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.thsnhminh')}}">NGUYỀN HIỀN MINH</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span style="font-size: 120%;"><strong>Thạc sĩ chuyên ngành:&nbsp; Công tác xã hội</strong></span></p>
                                                    <p>– Quản lý ca và thực hành tham vấn hỗ trợ tâm lý trị liệu với hơn 300 thân chủ tại hai nhà tạm lánh dành cho nạn nhân bị buôn bán và bạo lực gia đình từ 2006 – 2014.</p>
                                                    <p>– Quản lý ca với trên 100 thân chủ là những phụ nữ bán dâm và nghiện ma túy, bị bạo lực gai đình, di cư từ tháng 4/2014 đến tháng 11/2015.</p>
                                                    <p>– Tham gia xây dựng và thiết kế bộ hồ sơ quản lý ca của hai nhà tạm lánh – Trung tâm Phụ nữ và Phát triển từ 2006 đến 2011.</p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.thsnhminh')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->

                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Le The Hanh.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.thslthanh')}}">LÊ THẾ HANH</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span style="font-size: 120%;"><strong>Thạc sĩ Tâm lý học Lâm sàng</strong></span></p>
                                                    <p>– Chuyên gia giám sát thực hành ca tại dự án “Đường dây nóng Ngày Mai” – hỗ trợ tâm lý cho người trầm cảm (2021).</p>
                                                    <p>– Chuyên gia giám sát thực hành ca tại dự án “Ô cửa màu xanh” – hỗ trợ tâm lý cho người khuyết tật bị ảnh hưởng do dịch Covid 19. (2021)</p>
                                                    <p>– Quản lý chuyên môn phòng tham vấn học đường tại trường THCS Nguyễn Trường Tộ, Đống Đa, Hà Nội (2020)</p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.thslthanh')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->
                                    <div class="d-md-flex testimony-29101 align-items-stretch">
                                        <div class="image" style="background-image: url('assets/img/team/Dang Minh Khue.png');"></div>
                                        <div class="text">
                                            <h4><a target="_blank" href="{{route('layouts.profile.thsdmkhue')}}">ĐẶNG MINH KHUÊ</a></h4>

                                            <div class="elementor-widget-container mb-3">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p><span style="font-size: 120%;"><strong>Thạc sĩ Tâm lý học Lâm sàng</strong></span></p>
                                                    <p>– Chuyên gia tham vấn trị liệu tậm lý lâm sàng Trẻ em và Vị thành niên</p>
                                                    <p>– Chuyên viên tư vấn đào tạo, phát triển chương trình Chăm sóc sức khoẻ tinh thần cộng đồng, giáo dục kĩ năng sống, giá trị sống.</p>
                                                    <p>– Nhà tham vấn, trị liệu cho dự án Nâng cao nhận thức về sức khỏe tinh thần thông qua xây dựng và vận hành phòng tham vấn học đường Speak Out – GNI (2019 – 2020)</p>
                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>

                                            <a class="cta-btn" target="_blank" href="{{route('layouts.profile.thsdmkhue')}}">
                                                <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                        </div>
                                    </div> <!-- .item -->
                                </div>

                                <div class="mt-3 text-center">
                                    <ul class="thumbnail">
                                        <li class="active"><a href="#"><img src="{{asset('assets/img/team/chu-dung.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Pham Van Tu.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Nguyen Thi Tham.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Nguyen Mai Huong.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Nguyen Thanh Van.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Nguyen Thuy Hang.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Nguyen Hien Minh.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Le The Hanh.png')}}" alt="Image" class="img-fluid"></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/team/Dang Minh Khue.png')}}" alt="Image" class="img-fluid"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- <img src="assets/img/danhgia.png" class="img-fluid" alt="">
            <a href="https://youtu.be/A67rHCURVaE" class="glightbox play-btn mb-4"></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider team # Mobile -->
    <div class="slider-team">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8 align-self-baseline position-relative">
                        <div class="content">

                            <div class="site-section bg-left-half mb-5">
                                <div class="owl-2-style">

                                    <div class="owl-carousel owl-2">

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/nguyen-van-dung.png" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.bsdung')}}">THẦY THUỐC ƯU TÚ BSCC.TS. BSCKII NGUYỄN VĂN DŨNG
                                                </a></h4>
                                            <p>Phó viện trưởng Viện sức khỏe
                                                tâm thần - Bệnh viện Bạch Mai</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/pham-van-tu.png" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.tspvtu')}}">TIẾN SĨ<br /> PHẠM VĂN TƯ</a></h4>
                                            <p>Phó trưởng Khoa Công tác xã hội,<br> trường Đại học Sư phạm Hà Nội</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thi-Tham-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.tsnttham')}}">TIẾN SĨ<br />
                                                    NGUYỄN THỊ THẮM</a></h4>
                                            <p>
                                                Tiến sĩ ngành: tâm lý – giáo dục
                                            </p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Mai-Huong-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.tsntmhuong')}}">TIẾN SĨ<br />
                                                    NGUYỄN THỊ MAI HƯƠNG</a></h4>
                                            <p>
                                                Tiến sĩ chuyên ngành: Tâm lý học</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thanh-Van-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.thsnttvan')}}">THẠC SĨ<br />
                                                    NGUYỄN THỊ THANH VÂN</a></h4>
                                            <p>
                                                Thạc sĩ chuyên ngành: Tâm lý học
                                                lâm sàng</p>
                                        </div>

                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thuy-Hang-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.thsntthang')}}">THẠC SĨ<br />
                                                    NGUYỄN THỊ THÚY HẰNG</a></h4>
                                            <p>
                                                Thạc sĩ chuyên ngành: Giáo dục học</p>
                                        </div>
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Hien-Minh-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.thsnhminh')}}">THẠC SĨ<br />
                                                    NGUYỄN HIỀN MINH</a></h4>
                                            <p>
                                                Thạc sĩ chuyên ngành: Công tác xã hội</p>
                                        </div>
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Le-The-Hanh-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.thslthanh')}}">THẠC SĨ<br />
                                                    LÊ THẾ HANH</a></h4>
                                            <p>
                                                Thạc sĩ Tâm lý học Lâm sàng</p>
                                        </div>
                                        <div class="media-29101">
                                            <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Dang-Minh-Khue-280x280.jpg" alt="Image" class="img-fluid">
                                            <h4><a target="_blank" class="text-slider" href="{{route('layouts.profile.thsdmkhue')}}">THẠC SĨ<br />
                                                    ĐẶNG MINH KHUÊ</a></h4>
                                            <p>
                                                Thạc sĩ Tâm lý học Lâm sàng</p>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.say')

</section>

@endsection