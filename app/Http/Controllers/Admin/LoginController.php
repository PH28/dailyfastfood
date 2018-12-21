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
        if(Auth::check()){
            $user = Auth::user();
            if($user->role_id==1){
                return redirect()->route('admin.home');
            }
            else{
                return view('admin.login');
            }
        }else{
            return view('admin.login');
        }
    }

    public function checkLogin(Request $request){
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($credentials)){
            if(Auth::user()->role_id == 1){
               return redirect()->route('admin.home');
            }else{
                echo 'đay là trang của user';
            }
        }else{
            return redirect()->back()->with('login_errors', 'Đăng nhập thất bại. Vui lòng kiểm tra lại');
        }
    }
    public function home(){
        $user = Auth::user();
        if($user->role_id==1){
            $category= Category::pluck('name','id');
            return view('admin.home',compact('user','category'));
        }else{
            return redirect()->route('adminlogin')->with('login_errors','bạn không phải là admin');;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
