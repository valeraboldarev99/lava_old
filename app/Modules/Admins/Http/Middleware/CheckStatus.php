<?php

namespace App\Modules\Admins\Http\Middleware;

use Auth;
use Closure;

class Checkstatus
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
        if(Auth::user() && Auth::user()->isAdmin())
        {
            return $next($request);
        }
        else {
            return redirect('/');
        }
    }
}