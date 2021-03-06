<?php

namespace Food\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Food\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Food\User;
use Food\Category;
use Food\Product;
use Food\Image;

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
                return redirect()->back()->with('login_errors', 'Không phải tài khoảng Admin');
            }
        }else{
            return redirect()->back()->with('login_errors', 'Đăng nhập thất bại. Vui lòng kiểm tra lại');
        }
    }
    public function home(){
        $user = Auth::user();
        if($user->role_id==1){
           
            $products=Product::with('images')->orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->paginate(10);
            return view('admin.home',compact('products'));
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
