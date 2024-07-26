<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,...$role): Response
    {
        if( !in_array(Auth::user()->role,$role))
        {
            return back();
        }

        // dd(Auth::user()->role);
        // if(Auth::user()->role == "Surveyor")
        // {
        //     return  $next($request);
        // }
        // if(Auth::user()->role == "User")
        // {
        //     dd('a');
        // }
        return $next($request);
    }
}
