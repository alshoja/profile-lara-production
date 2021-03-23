<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\DepartmentGeneralDirector;
use App\Rules\UniqueGDForDepartments;
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
        if ($request->role = "gd") {
            $users = User::where('role', 'general_director')->get();
            return response()->json($users, 200);
        } else if ($request->role = "director") {
            $users = User::where('role', 'director')->get();
            return response()->json($users, 200);
        }
        if ($request->role = "dh") {
            $users = User::where('role', 'department_head')->get();
            return response()->json($users, 200);
        }
        if ($request->role = "supervisor") {
            $users = User::where('role', 'supervisor')->get();
            return response()->json($users, 200);
        } else {
            return response()->json(["error" => "Something went wrong"], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);


        if ($request->role == "gd") {
            $gdCount = DepartmentGeneralDirector::where('general_director_id', $request->user_id)
                ->where('dep_id', $request->id)
                ->count();
            if ($gdCount < 1) {
                $data = ['general_director_id' =>  $request->user_id, 'dep_id' => $request->id];
            }
        } else if ($request->role == "director") {
        }
        if ($request->role == "dh") {
        }
        if ($request->role == "supervisor") {
        }
        if (isset($data)) {
            $user = DepartmentGeneralDirector::create($data);
            return response()->json($user, 200);
        }
        return response()->json(['message' => 'user already added'], 400);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUserTags($id)
    {
        if (Auth::user()->role == "admin") {
            $users = DepartmentGeneralDirector::with('users')->where('dep_id', $id)->get()->pluck('users.name');
            return response()->json($users, 200);
        }
        // else if(){

        // }
        else {
            return response()->json(['message' => "you are not authorized"], 403);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $depId)
    {
        DepartmentGeneralDirector::where('general_director_id', $userId)
            ->where('dep_id', $depId)
            ->delete();
        return response()->json(['message' => "item deleted"], 202);
    }
}
