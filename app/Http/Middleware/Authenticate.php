<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {


        if (!$request->expectsJson()) {
            if (Request::is('admin/*'))
                return route('admin.login');
            else
                return route('get.Admin.login');

        }



        if (!$request->expectsJson()) {
            if (Request::is('vendor/*'))
                return route('vendor.login');
            else
                return route('get.vendor.login');

        }


        if (!$request->expectsJson()) {
            if (Request::is('e-commerce/*'))
                return route('user.login');
            else
                return route('get.user.login');

        }









    }







}
