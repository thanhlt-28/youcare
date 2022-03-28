<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate(
            [
                'email'    => 'required|email',
                // 'username' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Vui lòng nhập email',
                // 'username.required' => 'Vui lòng nhập email hoặc số điện thoại',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Vui lòng nhập mật khẩu',
            ]
        );

        if (
            Auth::attempt(['email' => $request->email, 'password' => $request->password], !empty($request->remember))
            // || Auth::attempt(['phone_number' => $request->email, 'password' => $request->password])
        ) {
            return redirect('/')->with('success', 'Đăng nhập thành công');
        } else {
            return back()->withErrors([
                'email' => 'Thông tin đăng nhập không đúng!',
                // 'phone_number' => 'Thông tin đăng nhập không đúng!',
                'password' => 'Sai mật khẩu',
            ]);
        }

        return view('auth.login', [
            'email' => $request->email,
            'remember' => $request->remember,
        ]);
    }
}
