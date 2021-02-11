<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin extends Middleware
{

    public function handle($request, \Closure $next, ...$guards)
    {
        if (auth()->user()) {
            $role = Auth::user()->role;
            switch ($role) {
                case 'ADMIN':
                    return $next($request);
                    break;
                case 'CUSTOMER':
                    return redirect('/member');
                    break;
            }
        }
        return redirect('/');
    }

}
