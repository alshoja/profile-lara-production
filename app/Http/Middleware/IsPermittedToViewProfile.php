<?php

namespace App\Http\Middleware;

use App\Models\Profile;
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
        $profile_id = $request->route('id');
        $profile = Profile::find($profile_id);
        if ($profile->employ_id == Auth::user()->id) {
            return $next($request);
        } else {
            return back();
        }
    }
}
