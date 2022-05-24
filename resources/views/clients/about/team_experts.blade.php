@extends('layouts.main')
@section('title', 'Đội ngũ chuyên gia')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-team"></div>

        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('clients.about')}}">Giới thiệu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đội ngũ chuyên gia</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section>
        <div class="container">
            <style>
                .hover-shadow {
                    transition: .3s ease;
                }

                .hover-shadow:hover {
                    box-shadow: 0px 4px 25px 0px rgba(27, 39, 71, 0.15);
                }
            </style>
            <!-- Chuyên gia -->
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a class="text-center" href="{{route('layouts.profile.bsdung')}}" target="_blank">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/chu-dung.png')}}" class="img-top" alt="Team Image">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">BSCC.TS.BSCKII </br>NGUYỄN VĂN DŨNG</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Phó viện trưởng Viện sức khỏe
                                    </br>tâm thần – Bệnh viện Bạch Mai</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.bsdung')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.tspvtu')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/pham-van-tu.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">TIẾN SĨ</br>
                                    PHẠM VĂN TƯ</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Tiến sĩ Tâm lý học</p>
                            </div>
                        </a>
                        <div class="btn-footer mt-4">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.tspvtu')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.tsnttham')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/nguyen-thi-tham.jpg')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">TIẾN SĨ</br>
                                    NGUYỄN THỊ THẮM</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Tiến sĩ ngành Tâm lý – giáo dục</p>
                            </div>
                        </a>
                        <div class="btn-footer mt-4">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.tsnttham')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.tsntmhuong')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/nguyen mai huong.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">TIẾN SĨ</br>
                                    NGUYỄN THỊ MAI HƯƠNG</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Tiến sĩ ngành Tâm lý học</p>
                            </div>
                        </a>
                        <div class="btn-footer mt-4">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.tsntmhuong')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 justify-content-center row-cols-md-4 g-4 mt-2">
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.thsnttvan')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/nguyen-thanh-van.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN THỊ THANH VÂN</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Thạc sĩ tham vấn & trị liệu tâm lý</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsnttvan')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.thsntthang')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/nguyen-thuy-hang.gif')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN THỊ THÚY HẰNG</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Thạc sĩ ngành Giáo dục học</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsntthang')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.thsnhminh')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/nguyen-hien-minh.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN HIỀN MINH</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Thạc sĩ ngành Công tác xã hội</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsnhminh')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                <div class="col"></div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.thslthanh')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/le-the-hanh.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    LÊ THẾ HANH</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Thạc sĩ
                                    Tâm lý học Lâm sàng</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thslthanh')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <a target="_blank" class="text-center" href="{{route('layouts.profile.thsdmkhue')}}">
                            <div class="team-6">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/team/team-detail/dang-minh-khue.png')}}" class="img-top" alt="...">
                                </div>
                            </div>
                            <div class="card-body">

                                <h5 class="card-title">THẠC SĨ</br>
                                    ĐẶNG MINH KHUÊ</h5>

                                <p style="color:#5a5454;" class="card-text text-center">Thạc sĩ
                                    Tâm lý học Lâm sàng</p>
                            </div>
                        </a>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="{{route('layouts.profile.thsdmkhue')}}" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>

            <!-- End Chuyên gia -->
        </div>

    </section>

    @include('clients.about.group')

</main>

@endsection