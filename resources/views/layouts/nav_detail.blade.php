<!-- ======= Header ======= -->
<div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
        <!-- <h1 class="text-light"><a href="{{'/'}}">Serenity</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{'/'}}"><img src="{{asset('assets/img/logo-landscape.png')}}" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{'/'}}">Trang chủ</a></li>
            <li><a href="{{route('clients.about')}}"><span>Giới thiệu</span></a></li>
            <li><a href="{{route('clients.platform.product')}}">Sản phẩm</a>
            <li><a href="{{route('price.ck_price')}}"><span>Giá</span></a></li>
            <li><a href="{{route('clients.contact')}}">Liên hệ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->


</div>