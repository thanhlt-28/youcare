<!-- ======= Header ======= -->
<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
        <!-- <h1 class="text-light"><a href="{{'/'}}">Serenity</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{'/'}}"><img src="assets/img/logo-landscape.png" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="active" href="{{'/'}}">Trang chủ</a></li>
            <li class="dropdown"><a href="{{route('clients.about')}}"><span>Giới thiệu</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{route('clients.post.enlist')}}">Tuyển dụng</a></li>
                    <li><a href="#">Thông tin thanh toán</a></li>
                    <!-- navbar-items -->
                    <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Phần mềm</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Tính năng</a></li>
                    <li><a href="#">Bảng giá</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Tài nguyên</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="#">Tổng quan</a></li>
                    <li><a href="#">Tài liệu</a></li>
                    <li><a href="#">Video</a></li>
                </ul>
            </li>
            <!-- <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="portfolio.html">Portfolio</a></li> -->
            <li><a href="#">Kiến thức</a></li>
            <li><a href="{{route('clients.contact')}}">Liên hệ</a></li>

            <!-- <li><a class="getstarted" href="about.html">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>