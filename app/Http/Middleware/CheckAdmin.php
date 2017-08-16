<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */



    public function handle($request, Closure $next, $guard = null)
    {

            if(Auth::user() == NULL){
                return redirect('/home');
            }

           if(Auth::Guard($guard)->user()->user_role !== 'teacher') {
                return redirect('/home');
            }
        return $next($request);
    }
}