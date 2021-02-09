<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;

class AuthenticateAdmin extends Authenticate
{
    protected $userTypes = ['ADMIN', 'DEV', 'CUSTOMER'];

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('admin.login');
        }
    }

    protected function authenticate($request, array $guards)
    {
        $guards = ['admin'];
        parent::authenticate($request, $guards);

//        if (!in_array($this->auth->user()->type, $this->userTypes)) {
//            throw new AuthenticationException(
//                'Unauthenticated.', $guards, $this->redirectTo($request)
//            );
//        }
    }
}
