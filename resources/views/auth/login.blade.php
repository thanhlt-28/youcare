@extends('layouts.main')
@section('title', 'Đăng nhập')
@section('content')

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

            @if(session()->has('warning'))
            <div class="alert alert-warning">
                {{ session()->get('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center py-4">
                                    <a href="{{'/'}}" class="logo d-flex align-items-center w-auto">
                                        <img width="50px" src="/assets/img/favicon.gif" alt="">
                                    </a>
                                </div><!-- End Logo -->
                                <div class="pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">ĐĂNG NHẬP</h5>
                                    <p class="text-center small">Vui lòng nhập email để đăng nhập</p>
                                </div>

                                <form role="form" method="POST" action="{{route('auth.postLogin')}}" enctype="multipart/form-data" class="row g-3 needs-validation">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                            <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Điền email..." id="yourEmail">
                                        </div>
                                        @if ($errors->has('email'))
                                        <span class="text-danger msg-info">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu..." id="yourPassword">
                                        @if ($errors->has('password'))
                                        <span class="text-danger msg-info">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember">
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Bạn chưa có tài khoản? <a href="{{'register'}}">Đăng ký</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


@endsection