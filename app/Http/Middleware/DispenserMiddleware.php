<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class DispenserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->is_role == 6) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect(url('/'));
            }
            
        } else {
            Auth::logout();
            return redirect(url('/'));
        }
        
    }
}