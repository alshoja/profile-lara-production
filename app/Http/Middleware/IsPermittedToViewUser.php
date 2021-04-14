<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class IsPermittedToViewUser
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
        $user = User::where('id', $request->route('id'))->first();
        if (Auth::check() && Auth::user()->role != "admin" && Auth::user()->id != $user->id) {
            if (Auth::user()->role == "supervisor") {
                if ($user->role == 'employ') {
                    return $next($request);
                } else {
                    return back();
                }
            }
            if (Auth::check() && Auth::user()->role == "department_head" && Auth::user()->id != $user->id) {
                if ($user->role == 'supervisor') {
                    return $next($request);
                } else {
                    return back();
                }
            }
            if (Auth::check() && Auth::user()->role == "director") {
                if ($user->role == 'department_head') {
                    return $next($request);
                } else {
                    return back();
                }
            }
            abort(403, 'Unauthorized action.');
            return $next($request);
        }
    }
}
