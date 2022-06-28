<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Supervisorpabrik
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
        if(Auth::user()->role == 'supervisor_pabrik'){
            return $next($request);
        }
        return $next($request);
    }
}
