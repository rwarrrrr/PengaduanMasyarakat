<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginMiddleware
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

        if (!Session::get('login')) {        
            return $next($request);
        }else{
            if (Session::get('level') == 'admin') {
                return redirect('admin/home');
            } elseif(Session::get('level') == 'petugas') {
                return redirect('petugas/home');
            } elseif (Session::get('level')  == 'masyarakat') {
                return redirect('masyarakat/home');
            } else{
                return redirect('/');
            }

        }

    }
}
