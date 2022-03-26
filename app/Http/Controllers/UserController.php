<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\format_phone_number;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
    // const EMAIL_REGEX = '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD';

    // protected function credentials(Request $request)
    // {

    //     $username = $request->get($this->username(), '');
    //     $usernameField = 'email';
    //     preg_match(self::EMAIL_REGEX, $username, $matches);
    //     // Nếu không phải địa chỉ email thì sẽ có thể là số điện thoại
    //     if (empty($matches)) {
    //         $usernameField = 'phone_number';
    //         $username = $this->validatePhoneNumber($username);
    //     }

    //     return [
    //         $usernameField => $username,
    //         // 'password' => $request->get('password'),
    //     ];
    // }

    // protected function validatePhoneNumber($username)
    // {
    //     $this->attributes['phone'] = preg_replace("/[^0-9]/","",$username);

    //     if ($username) {
    //         return $username;
    //     }

    //     nếu không phải số điện thoại thì trả về thông báo lỗi
    //     throw ValidationException::withMessages([
    //         $this->username() => [trans('auth.failed')],
    //     ]);
    // }

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
        ]);
    }
}
