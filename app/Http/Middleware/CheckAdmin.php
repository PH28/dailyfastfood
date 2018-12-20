<?php

namespace Food\Http\Middleware;
use Food\User;
use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId=\Auth::id();
        $user = User::find($userId);
        if($user==null){
            return redirect('/admin/login')->with('login_errors', 'bạn phải đăng nhập');
        }else{
            if($user->role_id == 1){
                return $next($request);
            }else{
                return redirect('/admin/login')->with('login_errors', 'user ko được vào đây');
            }
        }
    }
}
