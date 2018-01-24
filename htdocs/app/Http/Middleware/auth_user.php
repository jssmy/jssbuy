<?php

namespace App\Http\Middleware;

use Closure;

class auth_user
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

        if(\Auth::user()->type=="customer"){
            return redirect('/');
        }
        if(\Auth::user()->type=="admin"){
            return redirect('/home');
        }
        
        
        return $next($request);
    }
}
