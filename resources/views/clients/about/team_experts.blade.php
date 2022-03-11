@extends('layouts.main')
@section('page-title', 'Đội ngũ chuyên gia')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h1 class="text-uppercase mb-3">Đội ngũ chuyên gia</h1>
                </div>
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/nguyen-van-dung.png" class="img-top" alt="...">
                        <div class="card-body">
                            <a class="text-center" href="https://phongkhamtamly.com/thay-thuoc-uu-tu-nguyen-van-dung/" target="_blank">
                                <h5 class="card-title">THẦY THUỐC ƯU TÚ BSCC.TS.BSCKII - NGUYỄN VĂN DŨNG</h5>
                            </a>
                            <p class="card-text">Phó viện trưởng Viện sức khỏe
                                tâm thần – Bệnh viện Bạch Mai</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thay-thuoc-uu-tu-nguyen-van-dung/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/pham-van-tu.png" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/tien-si-pham-van-tu/">
                                <h5 class="card-title">TIẾN SĨ
                                    PHẠM VĂN TƯ</h5>
                            </a>
                            <p class="card-text">Phó trưởng Khoa Công tác xã hội,
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/nguyen-thi-tham.png" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/tien-si-nguyen-thi-tham/">
                                <h5 class="card-title">TIẾN SĨ
                                    NGUYỄN THỊ THẮM</h5>
                            </a>
                            <p class="card-text">Tiến sĩ ngành:
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/nguyen-thi-mai-huong.png" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/tien-si-nguyen-thi-mai-huong/">
                                <h5 class="card-title">TIẾN SĨ
                                    NGUYỄN THỊ MAI HƯƠNG</h5>
                            </a>
                            <p class="card-text">Tiến sĩ chuyên ngành:
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2022/01/Thanh-Van.jpg" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thanh-van/">
                                <h5 class="card-title">THẠC SĨ
                                    NGUYỄN THỊ THANH VÂN</h5>
                            </a>
                            <p class="card-text">Thạc sĩ chuyên ngành:
                                Tâm lý học lâm sàng</p>
                        </div>
                        <div class="btn-footer">
                            <div class="d-grid mx-auto">
                                <a href="https://phongkhamtamly.com/thac-si-nguyen-thi-thanh-van/" target="_blank" type="button" class="btn btn-outline-success rounded-pill">Xem chi tiết <span class='bi bi-arrow-right'></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/hoang-le-thuy.png" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-hoang-le-thuy/">
                                <h5 class="card-title">THẠC SĨ
                                    HOÀNG LÊ THỦY</h5>
                            </a>
                            <p class="card-text">Thạc sĩ chuyên ngành: Tâm lý học
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2021/11/nguyen-thi-thuy-hang.png" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-nguyen-thi-thuy-hang/">
                                <h5 class="card-title">THẠC SĨ
                                    NGUYỄN THỊ THÚY HẰNG</h5>
                            </a>
                            <p class="card-text">Thạc sĩ chuyên ngành:
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2022/01/Hien-Minh.jpg" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-nguyen-hien-minh/">
                                <h5 class="card-title">THẠC SĨ
                                    NGUYỄN HIỀN MINH</h5>
                            </a>
                            <p class="card-text">Thạc sĩ chuyên ngành:
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2022/01/Hanh-Le-1.jpg" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-le-the-hanh/">
                                <h5 class="card-title">THẠC SĨ
                                    LÊ THẾ HANH</h5>
                            </a>
                            <p class="card-text">Thạc sĩ
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
                    <div class="card h-100 hover-shadow">
                        <img src="https://phongkhamtamly.com/wp-content/uploads/2022/01/Group-98231.jpg" class="img-top" alt="...">
                        <div class="card-body">
                            <a target="_blank" class="text-center" href="https://phongkhamtamly.com/thac-si-dang-minh-khue/">
                                <h5 class="card-title">THẠC SĨ
                                    ĐẶNG MINH KHUÊ</h5>
                            </a>
                            <p class="card-text">Thạc sĩ
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

</main>

@endsection