<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'list/departments',
        'list/sections',
        'department/*',
        'section/*',
        'user/permission',
        'user/permission/*',
        'user/permissions',
        'user/permissions/*',
        'profileUpdate/'
    ];
}
