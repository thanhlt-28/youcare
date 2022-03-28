<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:30|unique:users',
                'email' => 'required|email|unique:users,email',
                // 'email' => 'required|email:rfc,dns|unique:users,email',
                'phone_number' => 'required|numeric|digits:10',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'name.required' => 'Họ và tên là trường bắt buộc',
                'name.max' => 'Họ và tên không quá 30 ký tự',
                'name.unique' => 'Tên đã tồn tại',
                'phone_number.required' => 'Số đã tồn tại',
                'phone_number.numeric' => 'Số điện thoại phải là số',
                'phone_number.digits' => 'Số điện thoại là 10 số',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
                // 'password.confirmed' => 'Xác nhận mật khẩu không đúng',
                'password_confirmation.required' => 'Xác nhận mật khẩu',
                'password_confirmation.same' => 'Xác nhận mật khẩu không khớp',
            ]
        );


        $users = new User();
        $users->name = $request->name;
        $users->phone_number = $request->phone_number;
        $users->email = $request->email;
        $users->password = Hash::make('password');
        $users->role = 2;
        $users->fill($request->all());
        // dd($users);

        // $users
        // ->roles()
        // ->attach(Role::where('name','custom')->first());
        // return $users;

        $users->save();
        session()->flash('success', 'Đăng ký thành công');
        return view('auth.login');

        // auth()->login($users);
        // return redirect('/')->with('success', "Tạo tài khoản thành công.");
    }
}
