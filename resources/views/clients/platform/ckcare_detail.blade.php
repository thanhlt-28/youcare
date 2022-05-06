@extends('layouts.main_detail')
@section('title', 'CkCare')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="bread-ckcare">
            <div class="container">
                <div class="header-hero">
                    <a href="https://ck.youcare.vn/user/login" target="_blank">
                        <button type="button" class="btn btn-outline-success rounded-pill">Sàng lọc ngay</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-product">
            <h5>
                <q>Không trẻ em nào bỏ lại phía sau - Hãy bắt đầu theo dõi và sàng lọc cho trẻ ngay từ hôm nay!</q>
            </h5>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.product')}}">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ứng dụng CkCare</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-uppercase">Giới thiệu bộ công cụ</h2>
            </div>
            <!-- ======= Features Section ======= -->
            <section id="features" class="features" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <a href="https://checkingcare.vn/sang-loc-theo-doi/" target="_blank">
                                                <div class="icon-box">
                                                    <i class="bi bi-shop" style="color: #ffbb2c;"></i>
                                                    <h3>ASQ-3</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <a href="https://checkingcare.vn/cbcl/" target="_blank">
                                                <div class="icon-box">
                                                    <i class="bi bi-calendar-check-fill" style="color: #e80368;"></i>
                                                    <h3>CBCL</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <a href="https://checkingcare.vn/adhd/" target="_blank">
                                                <div class="icon-box">
                                                    <i class="bi bi-bar-chart-line" style="color: #5578ff;"></i>
                                                    <h3>ADHD</h3>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mt-3">
                                            <a href="https://checkingcare.vn/m-chart/" target="_blank">
                                                <div class="icon-box">
                                                    <i class="bi bi-paint-bucket" style="color: #e361ff;"></i>
                                                    <h3>M-Char-R</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mt-3">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="box" data-aos="fade-up">
                                            <h3>Free</h3>
                                            <h4><sup>$</sup>0<span> / month</span></h4>
                                            <ul>
                                                <li>Aida dere</li>
                                                <li>Nec feugiat nisl</li>
                                                <li>Nulla at volutpat dola</li>
                                                <li class="na">Pharetra massa</li>
                                                <li class="na">Massa ultricies mi</li>
                                            </ul>
                                            <div class="btn-wrap">
                                                <a href="#" class="btn-buy">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features Section -->

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-uppercase">Quy trình sàng lọc</h2>
            </div>
            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                <div class="container">
                    <!-- row -- 1 -->
                    <div class="row">
                        <div class="col-md-5 d-flex align-items-stretch" data-aos="fade-up">
                            <a href="{{route('layouts.procedure.dure_once')}}" class="img-item img-item-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Quy trình cho giáo viên</h5>
                                        <div class="img-media text-center">
                                            <img src="https://i.imgur.com/w2CKRB9.jpg" class="mr-3" alt="">
                                        </div>
                                        <p class="card-text text-center mt-3">Xây dựng kế hoạch sàng lọc từ khi bắt đầu đến khi kết thúc</p>
                                        

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-2 d-flex align-items-stretch mt-4" data-aos="fade-up">
                            <div class="img-media-icon" data-aos-delay="100">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>

                        <div class="col-md-5 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up">
                            <a href="{{route('layouts.procedure.dure_twice')}}" class="img-item img-item-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Quy trình cho phụ huynh</h5>
                                        <div class="img-media text-center">
                                            <img src="https://i.imgur.com/w2CKRB9.jpg" class="mr-3" alt="">
                                        </div>
                                        <p class="card-text text-center mt-3">Thiết lập nhóm chuyên gia để thực hiện chương trình sàng lọc</p>
                                        
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- row -- 2 -->
                        <div class="col-md-5 text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="img-media-icon-2">
                                <i class="bi bi-arrow-up"></i>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-stretch"></div>
                        <div class="col-md-5 text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="img-media-icon-2">
                                <i class="bi bi-arrow-down"></i>
                            </div>
                        </div>


                        <!-- row -- 3 -->
                        <div class="col-md-5 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{route('layouts.procedure.dure_four')}}" class="img-item img-item-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Quy trình cho nhà trường</h5>
                                        <div class="img-media text-center">
                                            <img src="https://i.imgur.com/w2CKRB9.jpg" class="mr-3" alt="">
                                        </div>
                                        <p class="card-text text-center mt-3">Giám sát quá trình sàng lọc và đưa ra những điều chỉnh khi cần thiết</p>
                                        
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-2 d-flex align-items-stretch mt-4" data-aos="fade-up">
                            <div class="img-media-icon">
                                <i class="bi bi-arrow-left"></i>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{route('layouts.procedure.dure_three')}}" class="img-item img-item-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Quy trình cho học sinh</h5>
                                        <div class="img-media text-center">
                                            <img src="https://i.imgur.com/w2CKRB9.jpg" class="mr-3" alt="">
                                        </div>
                                        <p class="card-text text-center mt-3">Tiến hành thực hiện sàng lọc dựa trên kế hoạch đã xây dựng</p>
                                        
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Features Section -->
            @include('layouts.ck_detail.ck_tabs')

        </div>
        <section class="content" data-aos="fade-up">
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
                                            <div class="image" style="background-image: url('../assets/img/team/chu-dung.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/thay-thuoc-uu-tu-nguyen-van-dung/">TS. BSCK II NGUYỄN VĂN DŨNG</a></h5>
                                                <strong>Tiến sĩ Bác sĩ Chuyên khoa II. Thầy thuốc ưu tú của Viện sức khỏe tâm thần – Bệnh viện Bạch Mai.</strong>
                                                <p>- Hơn 30 năm trong lĩnh vực điều trị các rối loạn tâm thần, các rối loạn phát triển ở trẻ em, cai nghiện game, internet, rượu...</p>
                                                <p>- Có nhiều thành tích cao quí được chủ tích nước, tổng bí thư, thủ tướng trao tặng.</p>
                                                <p>- Rối loạn thần kinh thực vật; Động kinh; Trầm cảm; Lo âu; Mất ngủ; Stress…</p>
                                                <p>- Cai nghiện ma tuý, ma tuý đá, cỏ Mỹ, game online,…</p>
                                                <p>- Cai nghiện ma tuý, ma tuý đá, cỏ Mỹ, game online,…</p>

                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/thay-thuoc-uu-tu-nguyen-van-dung/">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->

                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Pham Van Tu.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/tien-si-pham-van-tu/">PHẠM VĂN TƯ</a></h5>
                                                <strong>Tiến sĩ Tâm lý học</strong>
                                                <p>- Hơn 20 năm là chuyên gia tham vấn và trị liệu tâm lý cho trẻ em.</p>
                                                <p>- Chuyên gia cao cấp hỗ trợ các phòng tham vấn học đường thuộc các trường nổi tiếng của Việt Nam.</p>
                                                <p>- Chuyên gia tư vấn cho giáo viên các trường về xây dựng trường học hành phúc; tư vấn cho phụ huỳnh đồng hành cùng con.</p>
                                                <p>- Chuyên gia cao cấp cho các tổ chức phi chính phủ trong hoạt động tư vấn tâm lý và giáo dục kĩ năng sống cho trẻ em.</p>

                                                <a class="cta-btn" target="_blank" href="#">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->

                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Nguyen Thi Tham.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/tien-si-nguyen-thi-tham/">NGUYỄN THỊ THẮM</a></h5>
                                                <strong>Tiến sĩ tâm lý – giáo dục: Lĩnh vực đánh giá, trị liệu cho trẻ em</strong>
                                                <p>- Hơn 30 năm trong lĩnh vực điều trị các rối loạn tâm thần, các rối loạn phát triển ở trẻ em, cai nghiện game, internet, rượu...</p>
                                                <p>- Có nhiều thành tích cao quí được chủ tích nước, tổng bí thư, thủ tướng trao tặng.</p>
                                                <p>- Rối loạn thần kinh thực vật; Động kinh; Trầm cảm; Lo âu; Mất ngủ; Stress…</p>
                                                <p>- Cai nghiện ma tuý, ma tuý đá, cỏ Mỹ, game online,…</p>

                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/tien-si-nguyen-thi-tham/">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->

                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Nguyen Mai Huong.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/tien-si-nguyen-thi-mai-huong/">NGUYỄN THỊ MAI HƯƠNG</a></h5>
                                                <strong>Tiến sĩ Tâm lý học</strong>
                                                <p>- Hơn 15 năm giảng dạy ở các trường Cao đẳng, Đại học về lĩnh vực tham vấn, trị liệu tâm lý cho trẻ em, giáo dục kĩ năng sống, giá trị sống.</p>
                                                <p>– Chuyên gia cao cấp đánh giá và trị liệu tâm lý cho học sinh ở phòng tham vấn học đường trong trường học.</p>
                                                <p>- Diễn giả, chuyên gia tư vấn cho giáo viên, phụ huynh về các vấn đề liên quan đến đồng hành cùng trẻ em có vấn đề tâm lý, trường học hạnh phúc.</p>
                                                <p>– Chuyên gia tổ chức các hoạt động giáo dục giá trị sống, kĩ năng sống.</p>


                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/tien-si-nguyen-thi-mai-huong/">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->

                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Nguyen Thanh Van.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thanh-van/">NGUYỄN THỊ THANH VÂN</a></h5>
                                                <strong>Chuyên gia Tham vấn & trị liệu tâm lý</strong>
                                                <p>– Chuyên gia tham vấn cao cấp về hôn nhân gia đình, nuôi dạy con, mối quan hệ cặp đôi.</p>
                                                <p>– Chuyên gia tham vấn cao cấp về hôn nhân gia đình, nuôi dạy con, mối quan hệ cặp đôi.</p>
                                                <p>– Chuyên gia tư vấn định hướng phát triển bản thân, tư vấn nghề nghiệp và sức khoẻ tinh thần trong công việc.</p>
                                                <p>- Chuyên gia tham vấn tâm lý cho thanh thiếu niên về các khó khăn trong học tập, mối quan hệ, cuộc sống. Master Coach NLP và Thôi miên Trị liệu
                                                </p>

                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thanh-van/">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->

                                    
                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Nguyen Thuy Hang.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thuy-hang/">NGUYỄN THỊ THÚY HẰNG</a></h5>
                                                <strong>Chuyên gia Tâm lý - Giáo dục</strong>
                                                <p>– Trưởng phòng, Chuyên viên Tham vấn học đường trường Marie Curie Hà Nội.</p>
                                                <p>– Quản lý, Chuyên viên Tham vấn học đường trường THCS Nguyễn Trường Tộ Hà Nội.</p>
                                                <p>– Trên 15 năm kinh nghiệm làm việc chuyên sâu trong lĩnh vực đánh giá, tham vấn tâm lý cho trẻ em, vị thành niên và tham vấn hôn nhân gia đình.</p>
                                                <p>- Chuyên viên điều trị chứng nghiện, đặc biệt là nghiện Game/Internet.</p>
                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thuy-hang/">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->

                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Nguyen Hien Minh.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-hien-minh/">NGUYỀN HIỀN MINH</a></h5>
                                                <strong>Chuyên gia tư vấn trị liệu tâm lý</strong>
                                                <p>- Hơn 20 năm là chuyên gia tham vấn và trị liệu tâm lý cho trẻ em.</p>
                                                <p>- Chuyên gia cao cấp hỗ trợ các phòng tham vấn học đường thuộc các trường nổi tiếng của Việt Nam.</p>
                                                <p>- Chuyên gia tư vấn cho giáo viên các trường về xây dựng trường học hành phúc; tư vấn cho phụ huỳnh đồng hành cùng con.</p>
                                                <p>- Chuyên gia cao cấp cho các tổ chức phi chính phủ trong hoạt động tư vấn tâm lý và giáo dục kĩ năng sống cho trẻ em.</p>

                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/thac-si-nguyen-hien-minh/">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->

                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Le The Hanh.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/thac-si-le-the-hanh/">LÊ THẾ HANH</a></h5>
                                                <strong>Thạc sĩ Tâm lý học lâm sàng</strong>
                                                <p>– Chuyên gia tham vấn trị liệu tâm lý cho thanh thiếu niên.</p>
                                                <p>– Chuyên gia tâm lý trong lĩnh vực hàn gắn các mối quan hệ, trị liệu các rối loạn tâm thần.</p>
                                                <p>– Chuyên gia đào tạo tập huấn chương trình dự phòng sang chấn tâm lý tại trường học, tổ chức.</p>
                                                <p>– Chuyên viên điều trị chứng nghiện, đặc biệt là nghiện Game/Internet <br><br></p>


                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/thac-si-le-the-hanh/">
                                                    <button type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết</button></a>
                                            </div>
                                        </div> <!-- .item -->
                                        <div class="d-md-flex testimony-29101 align-items-stretch">
                                            <div class="image" style="background-image: url('../assets/img/team/Dang Minh Khue.png');"></div>
                                            <div class="text">
                                                <h5><a target="_blank" href="https://phongkhamtamly.com/thac-si-dang-minh-khue/">ĐẶNG MINH KHUÊ</a></h5>
                                                <strong>Thạc sĩ Tâm lý học lâm sàng</strong>
                                                <p>– Chuyên gia tham vấn trị liệu tậm lý lâm sàng Trẻ em và Vị thành niên.</p>
                                                <p>– Chuyên viên tư vấn đào tạo, phát triển chương trình Chăm sóc sức khoẻ tinh thần cộng đồng, giáo dục kĩ năng sống, giá trị sống.</p>
                                                <p>– Nhà tham vấn, trị liệu cho dự án Nâng cao nhận thức về sức khỏe tinh thần thông qua xây dựng và vận hành phòng tham vấn học đường Speak Out – GNI (2019 – 2020).</p>
                                                <p>- Quản lý chuỗi dự án phát triển giáo dục tại Trung tâm Nghiên cứu và Truyền thông vì sự phát triển bền vững (2020 - 2021).</p>

                                                <a class="cta-btn" target="_blank" href="https://phongkhamtamly.com/thac-si-dang-minh-khue/">
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
        @include('layouts.say')
    </section>



</main>
@endsection