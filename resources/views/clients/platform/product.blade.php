@extends('layouts.main')
@section('title', 'Sản phẩm')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h1 class="text-uppercase mb-3">Sản phẩm</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row justify-content-end">

                        <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-boxed py-5">
                                <i class="bi bi-people-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="50000" class="purecounter"></span>
                                <p>Khách hàng</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-boxed py-5">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="10" class="purecounter">0</span>
                                <p>Dịch vụ</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-boxed pb-5 pt-0 pt-lg-5">
                                <i class="bi bi-person-plus"></i>
                                <span data-purecounter-start="0" data-purecounter-end="15000" class="purecounter">0</span>
                                <p>Khách hàng tin cậy</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 1</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.hrm.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Work</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('clients.platform.prod_1')}}" class="btn-buy">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 2</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.info.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Work</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="{{route('clients.platform.prod_2')}}" class="btn-buy">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 3</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.sales.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Work</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('clients.platform.prod_3')}}" class="btn-buy">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="box featured" data-aos="fade-up">
                        <!-- <h3>San Pham 4</h3> -->
                        <div style="border: none;" class="card h-100">
                            <img class="card-img-top" src="/assets/img/work/pack.work.svg" width="50%" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Work</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('clients.platform.prod_4')}}" class="btn-buy">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Tính năng vượt trội</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                    quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card" style="background-image: url(/assets/img/features-1.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Mission</a></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up">
                    <div class="card" style="background-image: url(/assets/img/features-2.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Plan</a></h5>
                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="background-image: url(/assets/img/features-3.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Vision</a></h5>
                            <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="background-image: url(/assets/img/features-4.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Care</a></h5>
                            <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                            <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->


</main>
@endsection