@extends('layouts.main_detail')
@section('title', 'ChkCare')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <!-- <div class="bread-chkcare">
            <div class="container">
                <div class="header-hero">
                    <a href="https://chk.youcare.vn/user/login" target="_blank">
                        <button type="button" class="btn btn-outline-success rounded-pill">Mua ngay</button>
                    </a>
                </div>
            </div>
        </div> -->
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('clients.platform.product')}}">Ứng dụng Chkcare</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giá</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box" data-aos="fade-up">
                        <h3>Miễn phí</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="https://chk.youcare.vn/user/login" class="btn-buy">Mua ngay</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box featured" data-aos="fade-up" data-aos-delay="100">
                        <h3>Phổ biến</h3>
                        <h4><sup>$</sup>19<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <h3>Kinh doanh</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <span class="advanced">Mới</span>
                        <h3>Premium </h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{route('clients.contact')}}" class="btn-buy">Mua ngay</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Pricing Section -->
</main>

@endsection