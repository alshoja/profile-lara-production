<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsPermittedToViewProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $departments = session('department');
        if (in_array($request->route()->getParameter('id'), $departments)) {
            return $next($request);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
