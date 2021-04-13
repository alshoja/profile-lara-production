<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Employ;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\DepartmentHead;
use App\Models\DepartmentDirector;
use App\Models\DepartmentSupervisor;
use Illuminate\Support\Facades\Auth;
use App\Models\DepartmentGeneralDirector;

class SetDepartmentAndSection
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
        if (Auth::check()) {
            $this->setUserSession(Auth::user());
            return $next($request);
        }
    }

    protected function setUserSession($user)
    {
        $departmentIds = [];
        $section = [];
        if (Auth::user()->role == "general_director") {
            $departmentIds = DepartmentGeneralDirector::where('general_director_id', Auth::user()->id)->get()->pluck('dep_id');
            $section = 0;
        } else if (Auth::user()->role == "director") {
            $departmentIds = DepartmentDirector::where('director_id', Auth::user()->id)->get()->pluck('dep_id');
            $section = 0;
        } else if (Auth::user()->role == "department_head") {
            $departmentIds = DepartmentHead::where('depart_head_id', Auth::user()->id)->get()->pluck('dep_id');
        } else if (Auth::user()->role == "supervisor") {
            $departmentIds = DepartmentSupervisor::where('supervisor_id', Auth::user()->id)->get()->pluck('dep_id');
        } else if (Auth::user()->role == "employ") {
            $section = Employ::where('employ_id', Auth::user()->id)->get()->pluck('section_id');
            $departmentIds = Section::where('id', $section[0])->get()->pluck('dep_id')[0];
        } else if (Auth::user()->role == "admin") {
            $departmentIds = 0;
            $section = 0;
        }
        session(
            [
                'department' => $departmentIds,
                'section' => $section,
            ]
        );
    }
}
