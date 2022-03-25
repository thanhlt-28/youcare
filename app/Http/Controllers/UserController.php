<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');//return ra trang login để đăng nhập
    }


    public function postLogin(Request $request)
    {   
        // $arr = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];
        if (Auth::viaRemember() == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],!empty($request->remember))
            // || Auth::attempt(['phone_number' => $request->email, 'password' => $request->password])    
        ) {
            return redirect('/')->with('success', 'Đăng nhập thành công');
        }

        return view('auth.login', [
            'email' => $request->email,
            'success' => "Email hoặc mật khẩu không đúng!"
        ]);
    }
}
