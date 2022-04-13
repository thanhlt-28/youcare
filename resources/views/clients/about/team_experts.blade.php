@extends('layouts.main')
@section('title', 'Đội ngũ chuyên gia')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero" style="
            background-image: url(../assets/img/6487.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 30rem;
        ">
            <div class="container">
                <!-- <div class="breadcrumb-hero"> -->
                <style>
                    h1 {
                        text-shadow: 2px 2px 4px #000000;
                        line-height: 10;
                    }
                </style>
                <h1 class="text-uppercase mb-3">Đội ngũ chuyên gia</h1>
                <!-- </div> -->
            </div>
        </div>
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
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/nguyen-van-dung.png" class="img-top" alt="Team Image">
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="text-center" href="https://phongkhamtamly.com/thay-thuoc-uu-tu-nguyen-van-dung/" target="_blank">
                                <h5 class="card-title">THẦY THUỐC ƯU TÚ BSCC.TS.BSCKII - </br>NGUYỄN VĂN DŨNG</h5>
                            </a>
                            <p class="card-text text-center">Phó viện trưởng Viện sức khỏe
                                </br>tâm thần – Bệnh viện Bạch Mai</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thay-thuoc-uu-tu-nguyen-van-dung/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/pham-van-tu.png" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/tien-si-pham-van-tu/">
                                <h5 class="card-title">TIẾN SĨ</br>
                                    PHẠM VĂN TƯ</h5>
                            </a>
                            <p class="card-text text-center">Phó trưởng Khoa Công tác xã hội,
                                trường Đại học Sư phạm Hà Nội</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/tien-si-pham-van-tu/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thi-Tham-280x280.jpg" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/tien-si-nguyen-thi-tham/">
                                <h5 class="card-title">TIẾN SĨ</br>
                                    NGUYỄN THỊ THẮM</h5>
                            </a>
                            <p class="card-text text-center">Tiến sĩ ngành:
                                tâm lý – giáo dục</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/tien-si-nguyen-thi-tham/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Mai-Huong-280x280.jpg" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/tien-si-nguyen-thi-mai-huong/">
                                <h5 class="card-title">TIẾN SĨ</br>
                                    NGUYỄN THỊ MAI HƯƠNG</h5>
                            </a>
                            <p class="card-text text-center">Tiến sĩ chuyên ngành:
                                Tâm lý học</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/tien-si-nguyen-thi-mai-huong/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thanh-Van-280x280.jpg" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thanh-van/">
                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN THỊ THANH VÂN</h5>
                            </a>
                            <p class="card-text text-center">Thạc sĩ chuyên ngành:
                                Tâm lý học </br> lâm sàng</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thac-si-nguyen-thi-thanh-van/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/hoang-le-thuy.png" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-hoang-le-thuy/">
                                <h5 class="card-title">THẠC SĨ</br>
                                    HOÀNG LÊ THỦY</h5>
                            </a>
                            <p class="card-text text-center">Thạc sĩ chuyên ngành: Tâm lý học
                                lâm sàng trẻ em và thanh thiếu niên</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thac-si-hoang-le-thuy/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Thuy-Hang-280x280.jpg" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thuy-hang/">
                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN THỊ THÚY HẰNG</h5>
                            </a>
                            <p class="card-text text-center">Thạc sĩ chuyên ngành:
                                Giáo dục học</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thac-si-nguyen-thi-thuy-hang/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Nguyen-Hien-Minh-280x280.jpg" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-nguyen-hien-minh/">
                                <h5 class="card-title">THẠC SĨ</br>
                                    NGUYỄN HIỀN MINH</h5>
                            </a>
                            <p class="card-text text-center">Thạc sĩ chuyên ngành:
                                Công tác xã hội</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thac-si-nguyen-hien-minh/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Le-The-Hanh-280x280.jpg" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-le-the-hanh/">
                                <h5 class="card-title">THẠC SĨ</br>
                                    LÊ THẾ HANH</h5>
                            </a>
                            <p class="card-text text-center">Thạc sĩ
                                Tâm lý học Lâm sàng</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thac-si-le-the-hanh/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="border:none;" class="card h-100 hover-shadow">
                        <div class="team-6">
                            <div class="team-img">
                                <img src="https://phongkhamtamly.com/wp-content/uploads/2022/03/Dang-Minh-Khue-280x280.jpg" class="img-top" alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-dang-minh-khue/">
                                <h5 class="card-title">THẠC SĨ</br>
                                    ĐẶNG MINH KHUÊ</h5>
                            </a>
                            <p class="card-text text-center">Thạc sĩ
                                Tâm lý học Lâm sàng</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thac-si-dang-minh-khue/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Chuyên gia -->
        </div>

    </section>


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="fade-in">

            <div class="text-center">
                <h3>Cộng đồng</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Tham gia ngay</a>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->

</main>

@endsection