<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;



class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna telah login
        if (!Session::has('username')) {
            return redirect(route('login'))->with('error', 'You must be logged in to access this page.');
        }


        // Jika pengguna adalah admin, maka lanjutkan dengan permintaan
        return $next($request);
    }
}
