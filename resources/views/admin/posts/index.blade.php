@extends('admin.layouts.main')
@section('content')

<!-- Page Title -->
<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{('/admin')}}">Trang chủ</a></li>
      <li class="breadcrumb-item active">Bài viết</li>
    </ol>
  </nav>
</div>
<!-- End Page Title -->

<!-- Recent Sales -->
<div class="col-12">
  <div class="card recent-sales overflow-auto">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title">BÀI VIẾT <span>| All</span></h5>

      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Ảnh</th>
            <th scope="col">
              <a href="#" type="button" class="btn btn-success">
                <span class='bi bi-plus-circle-dotted' style='color: white'></span>
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="#">#2457</a></th>
            <td>Brandon Jacob</td>
            <td>At praesentium minu</td>
            <td>Lorem ipsum dolor sit amet. Eum recusandae quas qui amet tempora aut nihil sint non quibusdam doloribus qui sapiente aspernatur quo dolor perspiciatis. Rem iure alias non earum voluptatem et sequi voluptas aut quam nostrum qui dolor ipsa sit quas ipsum.64</td>
            <td><img src="{{asset('server/assets/img/product-4.jpg')}}" width="80px" class="img-fluid" alt="Image"></td>
            <td>
              <a href="#" type="button" class="btn btn-warning"><span class='bi bi-pencil'></span></a>
              <a href="#" type="button" class="btn btn-danger"><span class='bi bi-trash'></span></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2147</a></th>
            <td>Bridie Kessler</td>
            <td>Blanditiis dolor omnis similique</td>
            <td>Lorem ipsum dolor sit amet. Eum recusandae quas qui amet tempora aut nihil sint non quibusdam doloribus qui sapiente aspernatur quo dolor perspiciatis. Rem iure alias non earum voluptatem et sequi voluptas aut quam nostrum qui dolor ipsa sit quas ipsum.47</td>
            <td><img src="{{asset('server/assets/img/product-4.jpg')}}" width="80px" class="img-fluid" alt="Image"></td>
            <td>
              <a href="#" type="button" class="btn btn-warning"><span class='bi bi-pencil'></span></a>
              <a href="#" type="button" class="btn btn-danger"><span class='bi bi-trash'></span></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2049</a></th>
            <td>Ashleigh Langosh</td>
            <td>At recusandae consectetur</td>
            <td>Lorem ipsum dolor sit amet. Eum recusandae quas qui amet tempora aut nihil sint non quibusdam doloribus qui sapiente aspernatur quo dolor perspiciatis. Rem iure alias non earum voluptatem et sequi voluptas aut quam nostrum qui dolor ipsa sit quas ipsum.147</td>
            <td><img src="{{asset('server/assets/img/product-4.jpg')}}" width="80px" class="img-fluid" alt="Image"></td>
            <td>
              <a href="#" type="button" class="btn btn-warning"><span class='bi bi-pencil'></span></a>
              <a href="#" type="button" class="btn btn-danger"><span class='bi bi-trash'></span></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Angus Grady</td>
            <td>Ut voluptatem id earum et</td>
            <td>Lorem ipsum dolor sit amet. Eum recusandae quas qui amet tempora aut nihil sint non quibusdam doloribus qui sapiente aspernatur quo dolor perspiciatis. Rem iure alias non earum voluptatem et sequi voluptas aut quam nostrum qui dolor ipsa sit quas ipsum.67</td>
            <td><img src="{{asset('server/assets/img/product-4.jpg')}}" width="80px" class="img-fluid" alt="Image"></td>
            <td>
              <a href="#" type="button" class="btn btn-warning"><span class='bi bi-pencil'></span></a>
              <a href="#" type="button" class="btn btn-danger"><span class='bi bi-trash'></span></a>
            </td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Raheem Lehner</td>
            <td>Sunt similique distinctio</td>
            <td>Lorem ipsum dolor sit amet. Eum recusandae quas qui amet tempora aut nihil sint non quibusdam doloribus qui sapiente aspernatur quo dolor perspiciatis. Rem iure alias non earum voluptatem et sequi voluptas aut quam nostrum qui dolor ipsa sit quas ipsum.165</td>
            <td><img src="{{asset('server/assets/img/product-4.jpg')}}" width="80px" class="img-fluid" alt="Image"></td>
            <td>
              <a href="#" type="button" class="btn btn-warning"><span class='bi bi-pencil'></span></a>
              <a href="#" type="button" class="btn btn-danger"><span class='bi bi-trash'></span></a>
            </td>
          </tr>

        </tbody>
      </table>

    </div>

  </div>
</div>
<!-- End Recent Sales -->


@endsection