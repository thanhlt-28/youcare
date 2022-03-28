@extends('admin.layouts.main')
@section('content')

<!-- Page Title -->
<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{('/admin')}}">Trang chủ</a></li>
      <li class="breadcrumb-item active">Quản lý người dùng</li>
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
      <h5 class="card-title">QUẢN LÝ NGƯỜI DÙNG <span>| All</span></h5>

      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Chức năng</th>
            <th scope="col">
              <a href="#" type="button" class="btn btn-success">
                <span class='bi bi-plus-circle-dotted' style='color: white'></span>
              </a>
            </th>
          </tr>
        </thead>
        @php
        $index =1
        @endphp

        <tbody>
          @foreach ($user as $item)
          <tr>
            <th scope="row"><a href="#">{{$index++}}</a></th>
            <td>{{$item->name}}</td>
            <td>{{$item->phone_number}}</td>
            <td>{{$item->email}}</td>
            <td><img src="{{asset('server/assets/img/product-4.jpg')}}" width="80px" class="img-fluid" alt="Image"></td>
            <td>Phân quyền</td>
            <td>
              <a href="#" type="button" class="btn btn-warning"><span class='bi bi-pencil'></span></a>
              <a href="#" type="button" class="btn btn-danger"><span class='bi bi-trash'></span></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>

  </div>
</div>
<!-- End Recent Sales -->


@endsection