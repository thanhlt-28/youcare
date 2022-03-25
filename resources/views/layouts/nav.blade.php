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
                    <li><a href="{{route('clients.about.vision')}}">Tầm nhìn & Sứ mệnh</a></li>
                    <li><a href="{{route('clients.about.team_experts')}}">Đội ngũ chuyên gia</a></li>
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
            <li class="dropdown"><a href="{{route('clients.platform.product')}}"><span>Sản phẩm</span></a>
            </li>
            <li class="dropdown"><a href="#"><span>Tài nguyên</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{route('clients.library.overview')}}">Tổng quan</a></li>
                    <li><a href="{{route('clients.library.docs')}}">Tài liệu</a></li>
                    <li><a href="{{route('clients.library.media')}}">Video</a></li>
                </ul>
            </li>
            <!-- <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="portfolio.html">Portfolio</a></li> -->
            <li><a href="{{route('clients.contact')}}">Liên hệ</a></li>
            <!-- <li><a class="getstarted" href="about.html">Get Started</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>


    </nav><!-- .navbar -->

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown">
                        <a href="#">
                            <span class="text-success">{{Auth::user()->name}}</span>
                        </a>
                    <li class="dropdown"><a href="#"> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{'logout'}}"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- <a href="{{'/'}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> -->
            @else
            <a href="{{ route('login') }}"><button class="btn btn-outline-success rounded-pill">Đăng nhập</button></a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"><button class="btn btn-warnin rounded-pill">Đăng ký</button></a>
            @endif

            @endauth
        </div>
        @endif
    </div>

</div>