<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Factory as Auth;

class AdminAuth
{
    protected $auth;

    protected $guard = 'admin';

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    
    public function handle($request, Closure $next)
    {
        $this->authenticate($request);

        return $next($request);
    }

    protected function authenticate($request){
        if($this->auth->guard($this->guard)->check()){
            $this->auth->shouldUse($this->guard);
            return;
        }

        $this->unauthenticate($request);
    }

    protected function unauthenticate($request){
        throw new AuthenticationException(
            'unauthenticate',[$this->guard],$this->redirectTo($request)
        );
    }

    protected function redirectTo($request){
        if(!$request->expectsJson()){
            return route('admin.login');
        }
    }
}
