<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('account.login');
    }
    public function postLogin(Request $request)
    {
        //hàm đăng nhập, attempt đăng nhập thẳng vào luôn
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //nếu đăng nhập thành công thì trả về url
            return redirect(route('homePage'));
        }else {
            //nếu không thì trả lại thông báo
            return redirect()->back()->with('msg', 'Tài khoản/mật khẩu không chính xác');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect(route('homePage'));
    }
}
