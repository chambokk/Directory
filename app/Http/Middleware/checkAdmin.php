<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
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
       $user = auth()->user();
        if ($user) {
            if ($user->role !== 1) {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
        return $next($request);
    }
}
