@extends('layouts.main')
@section('title', 'CKCare')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="breadcrumb-ckcare"></div>
    <div class="bread-ckcare">
        <div class="container">
            <div class="header-hero">
                <a href="https://ck.youcare.vn/user/login" target="_blank">
                    <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                </a>
            </div>
        </div>
    </div>
    <div class="slogan-ckcare">
        <p class="slogan">
            <q>Không trẻ em nào bị bỏ lại phía sau - Hãy bắt đầu theo dõi và sàng lọc cho trẻ ngay từ hôm nay!</q>
        </p>
    </div>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.ckcare_detail')}}">Ứng dụng CKCare</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hành trình 2</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Breadcrumbs -->


<section id="" class="">
    <div class="section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Hỗ trợ và đồng hành</h2>
        <h6 class="mt-3">
            CKCare xây dựng chương trình chăm sóc sức khỏe tinh thần toàn diện
        </h6>
    </div>

    <div class="container">
        <div class="content-items" data-aos="fade-up">
            <div class="content-wrap nav-border">
                <div class="row">

                    <div class="col-12 col-lg-7">
                        <div class="content-body d-flex align-items-center">
                            <div>
                                <i><i class="bi bi-circle-square"></i> BrainCare xây dựng chương trình chăm sóc sức khỏe tinh thần toàn diện cho trẻ em, phối hợp giữa nhà trường, phụ huynh và học sinh.</i>
                                <br />
                                <b> Sau khi đánh giá, sàng lọc ra các vấn đề của trẻ như: </b>
                                <br>
                                <i class="bi bi-chevron-double-right"></i> Rối loạn phát triển <br>
                                <i class="bi bi-chevron-double-right"></i> Rối nhiễu tâm lý <br>
                                <i class="bi bi-chevron-double-right"></i> Sức khỏe tâm thần<br>
                                <div class="content-items mt-3">
                                    <b> Hỗ trợ chuyên sâu: </b>
                                    <br>
                                    <i class="bi bi-chevron-double-right"></i> Hotline: <span>(024) 4455 3307</span> <br>
                                    <i class="bi bi-chevron-double-right"></i> Tổng đài tư vấn: <span>1900 3307</span> <br>
                                    <i class="bi bi-chevron-double-right"></i> Website: <a href="https://braincare.vn" target="_blank">braincare.vn</a> <br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center">
                        <div class="img-content d-flex justify-content-center">
                            <img width="70%" src="{{asset('assets/img/work/mental-ht2.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-section mt-5">
                <ul class="m-0 nav nav-fill nav-justified nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"> <button class="active nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                            <h6> <i class="fas fa-home"></i> Giáo viên</h6>
                        </button> </li>
                    <li class="nav-item" role="presentation"> <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                            <h6><i class="fas fa-envelope-open"></i> Phụ huynh </h6>
                        </button> </li>
                    <li class="nav-item" role="presentation"> <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">
                            <h6> <i class="fas fa-user-astronaut"></i> Học sinh </h6>
                        </button> </li>
                </ul>
                <div class="border-grey bg-white p-3 tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p>
                            <b>Sau khi sử dụng CKCARE, chuyên gia của BrainCare sẽ giúp giáo viên & nhà trường:</b><br>
                            <i class="bi bi-play-circle"></i> Tư vấn hỗ trợ giáo viên trong việc đồng hành cùng học sinh<br>
                            <i class="bi bi-play-circle"></i> Đồng thời, CKCARE giúp giáo viên Giám sát báo cáo kịp thời các vấn đề liên quan đến học sinh cho phụ huynh<br>
                            <i class="bi bi-play-circle"></i> Nhờ vậy, Nhà trường và
                            phụ huynh cùng phối hợp, chia sẻ và đồng hành với các con để tìm ra các phương pháp giúp con dự phòng và đối mặt với các vấn đề tâm lý.<br>
                            <i class="bi bi-play-circle"></i> Và trên hành trình đó,
                            BrainCare luôn luôn đồng hành và sẵn sàng hỗ trợ các con cũng như đồng hành cùng gia đình và nhà trường.<br>
                            <i class="bi bi-play-circle"></i> Bên cạnh đó, Các chuyên
                            gia đến từ BrainCare sẽ có những định hướng giúp Nhà trường Xây dựng các hoạt động ngoại khóa, các phòng khám tâm lý, các buổi chia sẻ của chuyên gia về các vấn đề
                            liên quan đến chăm sóc sức khỏe tinh thần,... giúp phòng ngừa nguy cơ rủi ro liên quan đến sức khỏe tinh thần và các rối loạn phát triển của học sinh<br>
                            <i class="bi bi-play-circle"></i> Từ đó, Nhà trường, giáo
                            viên sẽ có các kế hoạch cụ thể nhằm phát triển toàn diện cho học sinh đảm bảo về sức khỏe tinh thần cho trẻ em<br>

                        </p>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p>
                            <b> Sau khi sử dụng CKCare bố mẹ sẽ giúp phụ huynh: </b><br>
                            <i class="bi bi-play-circle"></i> Hiểu được tình trạng sức khoẻ tinh thần của con hiện tại.<br>
                            <i class="bi bi-play-circle"></i> Đồng thời, các chuyên
                            gia sẽ hướng dẫn các phương pháp hỗ trợ, đồng hành với con hiệu quả hơn.<br>
                            <i class="bi bi-play-circle"></i> Từ đó, giúp con phát huy tốt nhất điểm mạnh của mình!.
                        </p>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                        <p>
                            <b> Khi sử dụng CKCare sẽ giúp các em: </b><br>
                            <i class="bi bi-play-circle"></i> Tự hiểu về tâm sinh lý của mình.<br>
                            <i class="bi bi-play-circle"></i> Được sự hỗ trợ và đồng hành của nhà trường, cha mẹ và chuyên gia.<br>
                            <i class="bi bi-play-circle"></i> Từ đó, hiểu được năng lực sở trường của mình.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .border-grey {
            border: 1px solid;
            border-end-start-radius: 5px;
            border-end-end-radius: 5px;
            border-top: none;
            border-color: #dee2e6;
        }

        #myTab {
            background-color: #789d35;
        }

        .content-wrap {
            padding: 10px;
            border: 1px solid #dee2e6
        }

        .nav-link {
            color: #fff;
        }

        .nav-link:hover {
            color: #fff
        }

        .nav-border {
            border-right: 3px solid #94c045;
        }
    </style>

    <script>
        var firstTabEl = document.querySelector('#myTab li:last-child a')
        var firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
    </script>

</section>


<section id="pricing" class="pricing">

    <!-- Slider team # Laptop -->
    <section class="slider-teams" data-aos="fade-up">
        <div class="row justify-content-center">
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