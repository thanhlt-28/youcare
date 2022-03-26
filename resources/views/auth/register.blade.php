@extends('layouts.main')
@section('title', 'Đăng ký')
@section('content')
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">

                            <div class="card-body">
                                <div class="d-flex justify-content-center py-4">
                                    <a href="{{'/'}}" class="logo d-flex align-items-center w-auto">
                                        <img width="50px" src="/assets/img/favicon.gif" alt="">
                                    </a>
                                </div><!-- End Logo -->
                                <div class="pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">ĐĂNG KÝ</h5>
                                    <p class="text-center small">Vui lòng điền đầy đủ thông tin để đăng ký tạo tài khoản</p>
                                </div>

                                <form role="form" method="POST" action="{{route('auth.postRegister')}}" enctype="multipart/form-data" class="row g-3 needs-validation">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Họ và tên</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nhập họ & tên..." id="yourName">
                                        <div class="invalid-feedback">Vui lòng nhập họ và tên...!</div>
                                        @if ($errors->has('name'))
                                        <span class="text-danger msg-info">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPhone" class="form-label">Số điện thoại</label>
                                        <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}" placeholder="Nhập số điện thoại..." id="yourPhone">
                                        @if ($errors->has('name'))
                                        <span class="text-danger msg-info">{{ $errors->first('phone_number') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Điền email...!" id="yourEmail">
                                            <div class="invalid-feedback">Vui lòng nhập địa chỉ email...!</div>
                                        </div>
                                        @if ($errors->has('email'))
                                        <span class="text-danger msg-info">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Mật khẩu</label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu..." id="yourPassword">
                                            <div class="invalid-feedback">Vui lòng nhập mật khẩu!</div>
                                        </div>
                                        @if ($errors->has('password'))
                                        <span class="text-danger msg-info">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="rePassword" class="form-label">Nhập lại mật khẩu</label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu..." id="rePassword">
                                            <div class="invalid-feedback">Nhập lại mật khẩu phải khớp với mật khẩu trên</div>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                        <span class="text-danger msg-info">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">Tôi đồng ý và chấp nhận các<a href="#"> điều khoản và điều kiện</a></label>
                                            <div class="invalid-feedback">Bạn phải nhấn đồng ý trước khi gửi mẫu</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Tạo tài khoản</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Bạn đã có tài khoản? <a href="{{'login'}}">Đăng nhập</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection