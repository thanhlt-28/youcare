<!-- ======= Header ======= -->
<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
        <!--image logo -->
        <a href="{{'/'}}"><img src="{{asset('assets/img/logo-landscape.png')}}" alt=""></a>
    </div>

    <nav id="navbar" class="navbar">
        <ul class="main-menu">
            <li class="item active">
                <a href="{{'/'}}">Trang chủ</a>
            </li>
            <li class="dropdown item"><a href="#">Giới thiệu <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{route('clients.about.vision')}}">Tầm nhìn & Sứ mệnh</a></li>
                    <li><a href="{{route('clients.about.team_experts')}}">Đội ngũ chuyên gia</a></li>

                </ul>
            </li>
            <li class="item"><a href="{{route('layouts.ck_detail.ckcare_detail')}}">Sản phẩm</a>
            </li>
            <li class="dropdown item">
                <a href="#"><span>Tài nguyên</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <!-- <li><a href="{{route('clients.library.docs')}}">Tài liệu</a></li> -->
                    <li><a href="{{route('clients.library.media')}}">Video hướng dẫn</a></li>
                </ul>
            </li>
            <li class="item"><a href="{{route('clients.police')}}">Điều khoản sử dụng</a></li>
            <li class="item"><a href="{{route('clients.contact')}}">Liên hệ</a></li>

        </ul>
       
        <i class="mobile-nav-toggle">
            <svg width="24" height="24" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.0991 1.84424H9.42098C8.80312 1.84424 8.30225 2.34511 8.30225 2.96298V4.64108C8.30225 5.25894 8.80312 5.75982 9.42098 5.75982H11.0991C11.7169 5.75982 12.2178 5.25894 12.2178 4.64108V2.96298C12.2178 2.34511 11.7169 1.84424 11.0991 1.84424Z" stroke="black" stroke-width="0.839053" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.94626 1.84424H3.26815C2.65029 1.84424 2.14941 2.34511 2.14941 2.96298V4.64108C2.14941 5.25894 2.65029 5.75982 3.26815 5.75982H4.94626C5.56412 5.75982 6.06499 5.25894 6.06499 4.64108V2.96298C6.06499 2.34511 5.56412 1.84424 4.94626 1.84424Z" stroke="black" stroke-width="0.839053" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M11.0991 7.99707H9.42098C8.80312 7.99707 8.30225 8.49795 8.30225 9.11581V10.7939C8.30225 11.4118 8.80312 11.9126 9.42098 11.9126H11.0991C11.7169 11.9126 12.2178 11.4118 12.2178 10.7939V9.11581C12.2178 8.49795 11.7169 7.99707 11.0991 7.99707Z" stroke="black" stroke-width="0.839053" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.94626 7.99707H3.26815C2.65029 7.99707 2.14941 8.49795 2.14941 9.11581V10.7939C2.14941 11.4118 2.65029 11.9126 3.26815 11.9126H4.94626C5.56412 11.9126 6.06499 11.4118 6.06499 10.7939V9.11581C6.06499 8.49795 5.56412 7.99707 4.94626 7.99707Z" stroke="black" stroke-width="0.839053" stroke-linecap="round" stroke-linejoin="round" />
            </svg></i>

    </nav>
    <!-- .navbar -->

    <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown">
                        <a href="#">
                            <img src="{{asset('assets/img/work/avt.png')}}" width="30px" alt="">
                            <span class="text-succes"> &nbsp; {{Auth::user()->name}}</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        @if (Auth::check())
                        <ul>
                            @if (Auth::user()->role == 1)
                            <li><a href="{{route('dashboard')}}">Quản trị <i class="bi bi-person-fill"></i></a></li>
                            @endif
                            <li><a href="{{'logout'}}">Đăng xuất <i class="bi bi-box-arrow-left"></i></a></li>
                        </ul>
                        @endif
                    </li>
                </ul>
            </nav>

            @else
            <a href="{{ route('login') }}"><button class="btn btn-outline-success rounded-pill">Đăng nhập</button></a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"><button class="btn btn-warnin rounded-pill">Đăng ký</button></a>
            @endif

            @endauth
        </div>
        @endif
    </div> -->

</div>