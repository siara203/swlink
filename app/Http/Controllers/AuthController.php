<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController  extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng đến trang dashboard
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        } else {
            // Đăng nhập thất bại, chuyển hướng lại trang đăng nhập với thông báo lỗi
            return redirect()->route('login')->with('error', 'Invalid username or password');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}

