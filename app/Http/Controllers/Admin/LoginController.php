<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function checkLogin(Request $request){
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($credentials)){
            if(Auth::user()->role_id == 1){
                echo 'admin';
                return view('home');
            }else{
                echo 'đay là trang của user';
            }
        }else{
            echo 'bạn chưa có tài khoảng';
        }
    }
}
