<?php

namespace App\Http\Middleware;

use Closure;

class Auth
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
        if($request->session()->get('user_logged') == true) 
            return $next($request);
        else 
            return redirect('/');
    }
}
