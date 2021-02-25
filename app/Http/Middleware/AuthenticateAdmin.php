<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin extends Middleware
{

    public function handle($request, \Closure $next, ...$guards)
    {
        if (auth()->user()->role != 'ADMIN') {
            app()->abort(403);
        }

        return $next($request);
    }

}
