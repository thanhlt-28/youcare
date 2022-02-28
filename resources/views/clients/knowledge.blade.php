@extends('layouts.main')
@section('page-title', 'Thông tin thanh toán')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2 class="text-uppercase mb-3">Kiến thức</h2>
                    <!-- <h6>Hệ sinh thái toàn diện sức khỏe tinh thần BrainCare </h6> -->
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{'/'}}">Trang chủ</a></li>
                <li>Kiến thức</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <section>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">With captions</h5>

                    <!-- Slides with captions -->
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="server/assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="server/assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img src="server/assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div><!-- End Slides with captions -->

                </div>
            </div>
        </div>
    </section>

</main>

@endsection