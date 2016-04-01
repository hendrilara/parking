<?php

namespace App\Http\Middleware;

use Closure;

class RedirectAdmin
{


    //protected $auth;

    //public function __construct(Guard $auth)
   // {
    //    $this->auth = $auth;
    //}
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guest($guard)->check()) {
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
