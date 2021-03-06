@extends('layouts.main')
@section('title', 'Giới thiệu')
@section('content')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="breadcrumb-about"></div>

    <div class="container">
      <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->

  <!-- ======= Work Process Section ======= -->
  <section id="work-process" class="work-process">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Tổng quan về hệ sinh thái</h2>
        <p>Cùng với đội ngũ chuyên gia hơn 15 năm kinh nghiệm đánh giá và trị liệu tâm lý, tâm lý giáo dục ở các trường nổi tiếng của Việt Nam.</p>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <a href="{{route('clients.platform.ckcare_detail')}}">
            <img src="assets/img/work-process-1.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-7 pt-4" data-aos="fade-left">
          <a href="{{route('clients.platform.ckcare_detail')}}">
            <h3>Ứng dụng CKCare</h3>
          </a>
          <p class="fst-italic">
            CKCare là phầm mềm ứng dụng:
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Được ứng dụng trong việc sàng lọc và phát hiện sớm các vấn đề trong phát triển và vấn đề tâm lý của trẻ từ 1 tháng đến 18 tuổi.</li>
            <li><i class="bi bi-check"></i> Nhằm giúp cha mẹ, thầy cô giáo, các nhà chuyên môn và chính trẻ đánh giá được các năng lực phát triển vượt trội hoặc các rối nhiễu trong quá trình phát triển của trẻ. </li>
            <li><i class="bi bi-check"></i> Đặc biệt là phát hiện sớm các rối nhiễu về tâm lý ở trẻ để có biện pháp phòng ngừa tác động tiêu cực cũng như có phương hướng hỗ trợ, thúc đẩy phát triển và can thiệp kịp thời khi cần thiết.</li>
            <li><i class="bi bi-check"></i> Sản phẩm là công cụ phục vụ cho cộng đồng trong việc hỗ trợ chăm sóc sự phát triển và tạo điều kiện phát triển tốt nhất cho trẻ em.</li>
          </ul>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <a href="{{route('clients.platform.pubcare')}}">
            <img src="assets/img/work-process-2.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <a href="{{route('clients.platform.pubcare')}}">
            <h3>Ứng dụng PubCare</h3>
          </a>
          <p class="fst-italic">
            PubCare là sản phẩm công nghệ:
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Được ứng dụng vào việc sàng lọc miễn phí sức khỏe cộng đồng.</li>
            <li><i class="bi bi-check"></i>Giúp những người gặp phải vấn đề về tâm lý và sức khỏe tâm thần biết được </br> vấn đề mình đang gặp phải.</li>
            <li><i class="bi bi-check"></i>Sản phẩm miễn phí cho cộng đồng.</li>


          </ul>
        </div>
      </div>

      <div class="row content">
        <div class="col-md-5" data-aos="fade-right">
          <a href="{{route('clients.platform.psycare')}}">
            <img src="assets/img/work-process-3.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-7 pt-5" data-aos="fade-left">
          <a href="{{route('clients.platform.psycare')}}">
            <h3>Ứng dụng PsyCare</h3>
          </a>
          <p>
            PsyCare là nền tảng tham vấn và trị liệu:
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Các vấn đề về tâm lý và sức khỏe tâm thần online.</li>
            <li><i class="bi bi-check"></i> Được kết nối với các chuyên gia tâm lý và chuyên gia sức khỏe tâm thần hàng đầu.</li>
          </ul>

        </div>
      </div>

      <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
          <a href="{{route('clients.platform.bizcare')}}">
            <img src="assets/img/work-process-4.png" class="img-fluid" alt="">
          </a>
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
          <a href="{{route('clients.platform.bizcare')}}">
            <h3>Ứng dụng BizCare</h3>
          </a>
          <p class="fst-italic">
            BizCare là sản phẩm công nghệ:
          </p>
          <ul>
            <li><i class="bi bi-check"></i> Được ứng dụng vào doanh nghiệp để theo dõi và chăm sóc sức khỏe tỉnh thần nhân sự.</li>
            <li><i class="bi bi-check"></i> Giúp môi môi trường, doanh nghiệp vui vẻ hạnh phúc và nâng cao hiệu quả công việc.</li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End Work Process Section -->
  @include('layouts.slider_team')

  @include('clients.about.group')

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

@endsection