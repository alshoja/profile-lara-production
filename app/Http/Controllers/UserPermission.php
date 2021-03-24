<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\DepartmentDirector;
use App\Models\DirectorGdRelation;
use Illuminate\Support\Facades\Auth;
use App\Rules\UniqueGDForDepartments;
use App\Models\DepartmentGeneralDirector;
use App\Models\DepartmentHead;
use Illuminate\Support\Facades\Validator;

class UserPermission extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = null;
        $role = $request->role;
        if ($role == "gd") {
            $users = User::where('role', 'general_director')->get();
        } else if ($role == "director") {
            $users = User::where('role', 'director')->get();
        } else if ($role == "dh") {
            $users = User::where('role', 'department_head')->get();
        } else if ($role == "supervisor") {
            $users = User::where('role', 'supervisor')->get();
        }
        return response()->json($users, 200);
    }

    /**
     * Get the specified userTags from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUserTagsBy($role, $id)
    {
        if (Auth::user()->role == "admin") {
            if ($role == "gd") {
                $users = DepartmentGeneralDirector::with('users')->where('dep_id', $id)->get()->pluck('users.name');
            } else if ($role == "director") {
                $users = DepartmentDirector::with('directors')->where('dep_id', $id)->get()->pluck('directors.name');
            } else if ($role == "dh") {
                $users = DepartmentHead::with('departmentHeads')->where('dep_id', $id)->get()->pluck('departmentHeads.name');
            }
            return response()->json($users, 200);
        } else {
            return response()->json(['message' => "you are not authorized"], 403);
        }
    }
}
