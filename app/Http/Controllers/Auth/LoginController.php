<?php
namespace Food\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Food\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Food\Http\Requests\LoginRequest;
use Food\User;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        if (Auth::check())
        {
            return redirect('home');
        } else {
            return view('auth.login');
        }
    }

    public function postLogin(LoginRequest $request) {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($login)) {
            return redirect('/home');
        } else {
            return redirect()->route('login')->with('status', 'Email hoặc Password không chính xác');
        }
    }

}