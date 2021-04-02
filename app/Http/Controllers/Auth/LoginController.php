<?php

namespace App\Http\Controllers\Auth;

use App\Models\Employ;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\DepartmentHead;
use App\Models\DepartmentDirector;
use App\Http\Controllers\Controller;
use App\Models\DepartmentSupervisor;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\DepartmentGeneralDirector;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $user = Auth::user();
        $this->setUserSession($user);
    }

    protected function setUserSession($user)
    {
        $departmentIds = null;
        $section = null;
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
