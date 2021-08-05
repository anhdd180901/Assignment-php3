<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // b1 : tao ra no = cau lenh : php artisan make:middleware tenmiddleware CheckLogin
        if(Auth::check()){ // neu login roi`
            return $next($request);
        }else{ // k dung thi bat dang nhap
            return redirect(route('login.getLogin'));
        }
    }
}
