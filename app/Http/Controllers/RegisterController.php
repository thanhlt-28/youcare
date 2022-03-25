<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);
        
        
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make('password');
        $users->fill($request->all());
        // dd($users);

        // $users->save();
        // session()->flash('success', 'Đăng ký thành công');
        // return view('auth.login');

        dd($users);
        auth()->login($users);

        return redirect('/')->with('success', "Tạo tài khoản thành công.");
    }
}
