<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class KeyAuthenticate
{
    /**
     * Ensure that user is authentificated, redirect to login page if not
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!empty(session('authentificated'))) {
            $request->session()->put('authenticated', true);
            return $next($request);
        }
        return redirect(route('login'));
    }
}
