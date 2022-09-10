<!-- ======= Hero Section ======= -->
<section id="hero">

  @if(session()->has('success'))
  <div class="alert alert-light alert-dismissible fade show">
    {{ session()->get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  <div class="hero-container">
    <div class="row">
      <div class="col-lg-6">
        <div class="hero-content">
          <h2 class="hero-title">NỀN TẢNG CHĂM SÓC SỨC KHỎE TINH THẦN TOÀN DIỆN</h2>
          <p class="hero-left">YouCare ứng dụng công nghệ vào việc theo dõi, sàng lọc, đánh giá, trị liệu và chăm sóc sức khỏe tinh thần cho cộng đồng. YouCare ứng dụng công nghệ để lan tỏa những trí tuệ của các chuyên gia hàng đầu trong lĩnh vực chăm sóc sức khỏe tinh thần.</p>

          <div class="d-flex align-items-center" data-aos="" data-aos-duration="100">
            <a href="{{route('clients.platform.product')}}" class="btn-get-started scrollto">Tìm hiểu ngay!</a>
          </div>

        </div>
      </div>
      <div class="col-lg-6">
        <!-- desktop -->
        <div class="hero-right">
          <div class="hero-image-wrap">
            <img class="img-hero" src="{{asset('assets/img/svg/people.svg')}}" alt="">
            <div class="hero-f-1">
              <a href="{{route('clients.platform.ckcare_detail')}}"> <span style="top: 40px; position: absolute; left: 0%;" class="hero-image-text">CKCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
            </div>
            <div class="hero-f-2">
              <a href="{{route('clients.platform.bizcare')}}"> <span style="position: absolute; left: 111%; top: 40px;" class="hero-image-text">BizCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
            </div>
            <div class="hero-f-3">
              <a href="{{route('clients.platform.pubcare')}}"> <span style="top: 335px; left: 0%; position: absolute;" class="hero-image-text">PubCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
            </div>
            <div class="hero-f-4">
              <a href="{{route('clients.platform.psycare')}}"> <span style="top: 335px; left: 111%; position: absolute;" class="hero-image-text">PsyCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="hero-container-mobile">
    <div class="hero-content">
      <h2 class="hero-title">NỀN TẢNG CHĂM SÓC SỨC KHỎE TINH THẦN TOÀN DIỆN</h2>
      <p class="hero-left">YouCare ứng dụng công nghệ vào việc theo dõi, sàng lọc, đánh giá, trị liệu và chăm sóc sức khỏe tinh thần cho cộng đồng. YouCare ứng dụng công nghệ để lan tỏa những trí tuệ của các chuyên gia hàng đầu trong lĩnh vực chăm sóc sức khỏe tinh thần.</p>

      <div class="d-flex align-items-center" data-aos="" data-aos-duration="100">
        <a href="{{route('clients.platform.product')}}" class="btn-get-started scrollto">Tìm hiểu ngay!</a>
      </div>

    </div>

    <!-- mobile -->
    <div class="hero-right">
      <div class="hero-image-wrap">
        <img class="img-hero" src="{{asset('assets/img/svg/people.svg')}}" alt="">
        <div class="hero-f-1">
          <a href="{{route('clients.platform.ckcare_detail')}}"> <span style="top: 68px; position: absolute; left: -5%;" class="hero-image-text">CKCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
        </div>
        <div class="hero-f-2">
          <a href="{{route('clients.platform.bizcare')}}"> <span style="position: absolute; left: 127%; top: 68px;" class="hero-image-text">BizCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
        </div>
        <div class="hero-f-3">
          <a href="{{route('clients.platform.pubcare')}}"> <span style="top: 335px; left: -5%; position: absolute;" class="hero-image-text">PubCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
        </div>
        <div class="hero-f-4">
          <a href="{{route('clients.platform.psycare')}}"> <span style="top: 335px; left: 127%; position: absolute;" class="hero-image-text">PsyCare</span><img class="btn-show btn-abc" src="{{asset('assets/img/svg/button.svg')}}" alt=""></a>
        </div>
      </div>
    </div>
  </div>

</section>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
  let abc = $('.btn-abc');
  [...abc].forEach(item => {
    // console.log(item);
    $(item).mouseover(() => {
      $(item).attr('src', '/assets/img/svg/btn-hover.svg')
    })
    $(item).mouseout(() => {
      $(item).attr('src', 'assets/img/svg/button.svg')
    })
  })
</script>

<!-- End Hero -->