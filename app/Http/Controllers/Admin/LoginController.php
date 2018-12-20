<?php

namespace Food\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Food\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Food\User;
use Food\Category;

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
               return redirect()->route('admin.home',Auth::user()->id);
            }else{
                echo 'đay là trang của user';
            }
        }else{
            return redirect()->back()->with('login_errors', 'Đăng nhập thất bại. Vui lòng kiểm tra lại');
        }
    }
    public function home(User $user){
        $category= Category::pluck('name','id');
        return view('admin.home',compact('user','category'));
    }
}
