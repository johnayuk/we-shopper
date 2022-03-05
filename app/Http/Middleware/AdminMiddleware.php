<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AdminMiddleware
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
        if(Auth::user()->user_type == 'admin'){
            return $next($request);
        }

        elseif(Auth::user()->user_type == ''){
            return redirect('/user');
        }
        else{
            return redirect('/');
        }
    }
}
