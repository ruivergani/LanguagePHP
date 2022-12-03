<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // If user is logged in and it is the login page or registration page you can automatically redirect to the dashboard
        if(Session()->has('loginId') && (url('login')==$request->url() || url('registration')==$request->url())){
            return redirect('dashboard'); // or back();
        }
        return $next($request);
    }
}
