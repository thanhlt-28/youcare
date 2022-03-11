@extends('layouts.main')
@section('page-title', 'Tầm nhìn & Sứ mệnh')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h1 class="text-uppercase mb-3">Tầm nhìn & Sứ mệnh</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('clients.about')}}">Giới thiệu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tầm nhìn & Sứ mệnh</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg" style="background: none;">
        <div class="container">

            <!-- Recent Activity -->
            <div class="card" style="border: none;" data-aos="fade-in">
                <div class="card-body">
                    <h3 class="card-title">Về chúng tôi</h3>
                    <p class="card-text">
                        Trung tâm chăm sóc sức khoẻ tinh thần Braincare với sự khao khát mang mang những nguồn tri thức ứng dụng vào đời sống giúp cho cộng đồng hạnh phúc từng giây phút...
                    </p>
                    <p class="card-text">
                    <p><b>Tầm nhìn</b></p>
                    Braincare hướng tới trở thành một trong những đơn vị dẫn đầu về lĩnh vực chăm sóc sức khoẻ tinh thần tại Việt Nam, làm thay đổi thói quen và nhận thức của người Việt Nam trong việc chú trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.
                    </p>
                    <p class="card-text">
                    <p><b>Sứ mệnh</b></p>
                    “Vì cộng đồng hạnh phúc hơn từng giây phút”
                    </p>
                </div>
            </div>
            <div class="card mt-3" data-aos="fade-in">
                <div class="card-body">
                    <h3 class="card-title">Giá trị cốt lõi BrainCare</h3>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card" style="border:none;" data-aos="fade-left">
                                <div class="card-body">
                                    <h5 class="card-title">Tâm</h5>
                                    <p class="card-text">Làm lĩnh vực tâm lý, chữ “TÂM” phải luôn đặt lên hàng đầu, chúng tôi luôn đặt việc phụng sự và cho đi hơn cả, luôn coi trọng và lấy khách hàng là trung tâm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card" style="border:none;" data-aos="fade-left">
                                <div class="card-body">
                                    <h5 class="card-title">Chuyên</h5>
                                    <p class="card-text">Làm việc với khách hàng, chúng tôi luôn đề cao sự chuyên nghiệp, sự nhiệt thành, tính trách nhiệm, sự tận tụy, sự minh bạch rõ ràng; lấy sự hài lòng của khách hàng làm thước đo cho sự thành công!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card" style="border:none;" data-aos="fade-right">
                                <div class="card-body">
                                    <h5 class="card-title">Tín</h5>
                                    <p class="card-text">Chữ tín là điều tối quan trọng, chúng tôi luôn vươn tới khẳng định niềm tin đúng đắn khi khách hàng chọn chúng tôi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card" style="border:none;" data-aos="fade-right">
                                <div class="card-body">
                                    <h5 class="card-title">Nhân</h5>
                                    <p class="card-text">Xây dựng mối quan hệ với khách hàng, đối tác, đồng nghiệp bằng sự thiện chí , tình ái, tinh thần nhân văn, sự công bằng, tôn trọng và yêu thương.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Recent Activity -->

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    

    <section id="contact" class="contact-ft">
        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info-ft">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Địa chỉ/ Location:</h4>
                            <p>- Tầng 7, 59 Võ Chí Công, Cầu Giấy, Hà Nội</p>
                            <p>- 7th floor, 59 Vo Chi Cong street, <br>Cau Giay District, Ha Noi</p>
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

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
                    <section id="contact" class="content-section">
                        <div id="map">
                            <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d476614.106305572!2d105.804103!3d21.050776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab226a78d97b%3A0xfa288a20a51995a7!2zVOG6p25nIDcsIDU5IFbDtSBDaMOtIEPDtG5nLCBOZ2jEqWEgxJDDtCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1621176139857!5m2!1svi!2sus" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection