<!-- ======= Hero Section ======= -->
<section id="hero">

  @if(session()->has('success'))
  <div class="alert alert-light alert-dismissible fade show">
    {{ session()->get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="hero-container" data-aos="fade-up">
    <h1 class="mb-5">NỀN TẢNG CHĂM SÓC SỨC KHỎE TINH THẦN TOÀN DIỆN</h1>
    <p style="color:#ffffff;">YouCare ứng dụng công nghệ vào việc theo dõi, sàng lọc, đánh giá, trị
      liệu và chăm sóc sức khỏe tinh thần cho cộng đồng.

    </p>
    <p style="color:#ffffff;">YouCare ứng dụng công nghệ để lan tỏa những trí tuệ của các chuyên
      gia hàng đầu trong lĩnh vực chăm sóc sức khỏe tỉnh thần.</p>
    <a href="{{route('clients.platform.product')}}" class="btn-get-started scrollto">Tìm hiểu ngay!</a>

    <div class="mouse-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="74.106" viewBox="0 0 30 74.106">
        <g id="Group_1582" data-name="Group 1582" transform="translate(-945 -545.699)">
          <g id="mouse" transform="translate(869.274 545.699)">
            <g id="Group_1577" data-name="Group 1577" transform="translate(75.726)">
              <g id="Group_1576" data-name="Group 1576">
                <path id="Path_4" data-name="Path 4" d="M90.726,0a15.136,15.136,0,0,0-15,15.235V27.367a15,15,0,1,0,30,.047V15.235A15.137,15.137,0,0,0,90.726,0ZM102.9,27.414a12.181,12.181,0,1,1-24.357-.047V15.235a12.181,12.181,0,1,1,24.357,0Z" transform="translate(-75.726)" fill="#fff"></path>
              </g>
            </g>
            <g id="Group_1579" data-name="Group 1579" transform="translate(89.315 11.662)">
              <g id="Group_1578" data-name="Group 1578">
                <path id="Path_5" data-name="Path 5" d="M240.457,140.15a1.411,1.411,0,0,0-1.411,1.411V146.5a1.411,1.411,0,0,0,2.821,0v-4.937A1.411,1.411,0,0,0,240.457,140.15Z" transform="translate(-239.046 -140.15)" fill="#fff"></path>
              </g>
            </g>
          </g>
          <g id="Group_1581" data-name="Group 1581" transform="translate(0 14)">
            <line id="Line_2" data-name="Line 2" y2="23" transform="translate(960.5 580.5)" fill="none" stroke="#fff" stroke-width="1" stroke-dasharray="4"></line>
            <g id="next" transform="translate(966.05 481.991) rotate(90)">
              <g id="Group_1580" data-name="Group 1580" transform="translate(117.742 0)">
                <path id="Path_6" data-name="Path 6" d="M123.685,5.312l-5.2-5.185a.436.436,0,0,0-.615.617l4.89,4.877L117.87,10.5a.436.436,0,0,0,.616.617l5.2-5.185a.436.436,0,0,0,0-.617Z" transform="translate(-117.742 0)" fill="#fff"></path>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </div>

  </div>
</section>
<!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    
    @include('layouts.app')

    @include('layouts.team')

  </section>
  <!-- End About Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container-app" data-aos="fade-in">
      <div class="text-center">
        <h3>Cộng đồng</h3>
        <p> Cộng đồng tâm lý với sứ mệnh thay đổi thói quen và nhận thức của người Việt Nam <br>
         trong việc chú trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.</p>
        <a class="cta-btn" target="_blank" href="https://www.facebook.com/congdongtamly/">Tham gia ngay</a>
      </div>

    </div>
  </section>

  <!-- ======= Cta Section ======= -->
  <!-- <section id="cta" class="cta">
    <div class="container-mobile" data-aos="fade-in">
      <div class="text-center">
        <h3>Cộng đồng</h3>
        <p> Cộng đồng tâm lý với sứ mệnh thay đổi thói quen và nhận thức của người Việt Nam trong việc chú trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.</p>
        <a class="cta-btn" target="_blank" href="https://www.facebook.com/congdongtamly/">Tham gia ngay</a>
      </div>

    </div>
  </section> -->
  
  <!-- End Cta Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services ">
    <div class="container">
      @include('layouts.say')
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">

      <div class="section-title" data-aos="fade-in">
        <h2>CÁC LĨNH VỰC KHÁC</h2>
      </div>

      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
          <a target="_blank" href="https://phongkhamtamly.com/dich-vu-tam-ly/">
            <div class="card" style="background-image: url(/assets/img/features-1.jpg);">
              <div class="card-body">
                <h5 class="card-title">Tham vấn trị liệu tâm lý</h5>
                <p class="card-text">Thực hiện tham vấn, tư vấn tâm lý trực tiếp, trực tuyến cho học sinh, cặp đôi, gia đình...</p>
                <div class="read-more"><a target="_blank" href="https://phongkhamtamly.com/dich-vu-tam-ly/"><i class="bi bi-arrow-right"></i></a></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-left">
          <a target="_blank" href="https://checkingcare.vn/sang-loc-theo-doi/">
            <div class="card" style="background-image: url(/assets/img/features-2.jpg);">
              <div class="card-body">
                <h5 class="card-title">Sàng lọc đánh giá sự phát triển của trẻ</h5>
                <p class="card-text">Hỗ trợ theo dõi sự phát triển của trẻ với bộ công cụ sàng lọc tin cậy nhất hiện nay...</p>
                <div class="read-more"><a target="_blank" href="https://checkingcare.vn/sang-loc-theo-doi/"><i class="bi bi-arrow-right"></i></a></div>
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-right" data-aos-delay="100">
          <a target="_blank" href="https://phongkhamtamthan.com/">
            <div class="card" style="background-image: url(/assets/img/features-3.jpg);">
              <div class="card-body">
                <h5 class="card-title">Kiểm tra sức khỏe tâm thần</h5>
                <p class="card-text">Đánh giá và trị liệu sức khỏe tâm thần như rối loạn lo âu, trầm cảm, stres...</p>
                <div class="read-more"><a target="_blank" href="https://phongkhamtamthan.com/"><i class="bi bi-arrow-right"></i></a></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-left" data-aos-delay="100">
          <a target="_blank" href="https://phongkhamtamly.com/tong-quan-doanh-nghiep/">
            <div class="card" style="background-image: url(/assets/img/features-4.jpg);">
              <div class="card-body">
                <h5 class="card-title">Sức khỏe tinh thần doanh nghiệp</h5>
                <p class="card-text">Sức khỏe là một trạng thái hoàn toàn thoải mái về thể chất, tinh thần và xã hội, chứ không phải là chỉ không có bệnh hay tật...</p>
                <div class="read-more"><a target="_blank" href="https://phongkhamtamly.com/tong-quan-doanh-nghiep/"><i class="bi bi-arrow-right"></i></a></div>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- End Features Section -->


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

</main><!-- End #main -->


<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>