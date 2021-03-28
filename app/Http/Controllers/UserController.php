<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employ;
use App\Models\Section;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\DepartmentHead;
use App\Rules\MatchOldPassword;
use App\Models\DepartmentDirector;
use Illuminate\Support\Facades\App;
use App\Models\DepartmentSupervisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\DepartmentGeneralDirector;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->where('role','!=','admin')->where(function (Builder $query) {
            $result = null;
            if (Auth::user()->role == "general_director") {
                $result =  $query->where('role', 'director');
            }
            if (Auth::user()->role == "director") {
                $result =  $query->where('role', 'department_head');
            }
            if (Auth::user()->role == "department_head") {
                $result =  $query->where('role', 'supervisor');
            }
            if (Auth::user()->role == "supervisor") {
                $result =  $query->where('role', 'employ');
            }
            return $result;
        })
            ->paginate(15);
        // return response()->json($users, 200);
        return view('pages.list-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = (object)[];
        $users->general_directors = User::with('gdRelation.department')->where('role', 'general_director')->get();
        $users->directors = User::with('departmentRelation.department')->where('role', 'director')->get();
        $users->department_heads = User::with('dhRelation.department')->where('role', 'department_head')->get();
        $users->supervisors = User::with('superRelation.department')->where('role', 'supervisors')->get();
        $users->departments = Department::all();
        $users->sections = Section::all();
        // return response()->json($users, 200);
        return view('pages.add-user', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string'],
            'image' => 'required|mimes:jpg,png|max:2048',
            'sign' => 'required|mimes:jpg,png|max:2048',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->contact = $request->contact;
        $user->role = $request->role;
        $user->create = $request->create;
        $user->update = $request->update;
        $user->delete = $request->delete;
        $user->image = $request->file('image')->store('images');
        $user->sign = $request->file('sign')->store('signs');
        $user->suspended = $request->suspended;
        $user->can_add_user = $request->can_add_user;
        $user->save();
        if ($user->id) {
            if (Auth::user()->role == "general_director") {
                $director = new DepartmentDirector();
                $director->director_id = $user->id;
                $director->dep_id = $request->dep_id;
                $director->general_director = Auth::user()->id;
                $director->save();
            } else if (Auth::user()->role == "director") {
                $dh = new DepartmentHead();
                $dh->depart_head_id = $user->id;
                $dh->dep_id = $request->dep_id;
                $dh->director_id = Auth::user()->id;
                $dh->save();
            } else if (Auth::user()->role == "department_head") {
                $dh = new DepartmentSupervisor();
                $dh->supervisor_id = $user->id;
                $dh->dep_id = $request->dep_id;
                $dh->depart_head_id = Auth::user()->id;
                $dh->save();
            } else if (Auth::user()->role == "supervisor") {
                $dh = new Employ();
                $dh->section_id = $request->section_id;
                $dh->supervisor_id = Auth::user()->id;
                $dh->save();
            }
        }
        return back()->with('message', 'User successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = (object)[];
        $role = request()->query('role');
        $user = User::findOrFail($id);
        if (request()->query('role') == "general_director") {
            $user->assets =  DepartmentDirector::with('subUsers')->where('general_director_id', $id)->paginate();
        }
        if (request()->query('role') == "director") {
            $user->assets =  DepartmentHead::with('subUsers')->where('director_id', $id)->paginate();
        }
        if (request()->query('role') == "department_head") {
            $user->assets =  DepartmentSupervisor::with('subUsers')->where('depart_head_id', $id)->paginate();
        }
        if (request()->query('role') == "supervisor") {
            $user->assets =  Employ::with('subUsers')->where('supervisor_id', $id)->paginate();
        }
        // dd($user->assets[0]);
        // return response()->json($user->assets, 200);
        return view('pages.profile-detail', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        if (Auth::user()->id != $id) {
            $user->contact = $request->contact;
            $user->create = $request->create;
            $user->update = $request->update;
            $user->delete = $request->delete;
        }

        // if (Auth::user()->role == "admin") {
        //     $user->role = $request->role;
        // }


        if ($request->file('image')) {
            $user->image = $request->file('image')->store('images');
        }
        if ($request->file('sign')) {
            $user->sign = $request->file('sign')->store('signs');
        }

        $user->suspended = $request->suspended;
        $user->can_add_user = $request->can_add_user;
        $user->save();
        return back()->with('message', 'User successfully updated');
    }

    /**
     * Change password 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
        User::find($request->id)->update(['password' => Hash::make($request->new_password)]);
        return back()->with('message', 'Password updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);
        return back()->with('message', 'User Deleted');
    }
}
