@extends('layouts.main')
@section('title', 'PubCare')
@section('content')
<main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>Trang bạn đang tìm kiếm không tồn tại.</h2>
        <a class="btn btn-success rounded-pill text-white" href="{{route('clients.platform.product')}}">Trở lại</a>
        <img src="{{asset('server/assets/img/not-found.svg')}}" width="50%" class="img-fluid py-5" alt="Page Not Found">
      </section>

    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection