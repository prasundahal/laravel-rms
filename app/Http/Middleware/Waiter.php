<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Waiter
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->roles->pluck('id')[0] == 1) {
            return redirect()->route('admin');
        }

        if (Auth::user()->roles->pluck('id')[0] == 2) {
            return $next($request);
        }

        abort(403);
    }
}
