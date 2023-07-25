<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if (Auth::user()->is_admin == '1'){ //Admin 1; User 0 
                return $next($request);
            } else {
                return redirect ('formprofile')->with('status', 'No estás autorizade a crear o modificar perfiles');
            }
        } else {
                return redirect ('/')->with('message', 'No estás logeade');
 
        }
    }
}
