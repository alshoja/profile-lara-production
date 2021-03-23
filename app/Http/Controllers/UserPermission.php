<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\DepartmentGeneralDirector;

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
        $formData = $request->get('formData');

        if ($formData['role'] == "gd") {

            $user = DepartmentGeneralDirector::create(
                [
                    'general_director_id' =>  $formData['user_id'], 'dep_id' => $request->id
                ]
            );
            return response()->json($user, 201);
        } else if ($formData['role'] == "director") {
            $user = DepartmentGeneralDirector::create(
                [
                    'general_director' => $request->id, 'dep_id' => $request->dep_id
                ]
            );
            return response()->json($user, 201);
        }
        if ($formData['role'] == "dh") {
            $user = DepartmentGeneralDirector::create(
                [
                    'general_director' => $request->id, 'dep_id' => $request->dep_id
                ]
            );
            return response()->json($user, 201);
        }
        if ($formData['role'] == "supervisor") {
            $user = DepartmentGeneralDirector::create(
                [
                    'general_director' => $request->id, 'dep_id' => $request->dep_id
                ]
            );
            return response()->json($user, 201);
        } else {
            return response()->json(["error" => "Something went wrong"], 500);
        }
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
    public function destroy($id)
    {
        //
    }
}
