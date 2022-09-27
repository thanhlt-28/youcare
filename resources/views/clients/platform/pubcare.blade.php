@extends('layouts.main')
@section('title', 'PubCare')
@section('content')
<main>
  <div class="container">

    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <h2>Ứng dụng đang được xây dựng, vui lòng quay trở lại trang chủ.</h2>
      <a class="btn btn-success rounded-pill text-white" href="{{('/')}}">Trang chủ</a>
      <img src="{{asset('assets/img/not-found.jpg')}}" width="30%" class="img-fluid py-5" alt="Page Not Found">
    </section>

  </div>
</main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection