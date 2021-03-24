<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentDirector;
use Illuminate\Support\Facades\Auth;

class DirectorController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $directorCount = DepartmentDirector::where('director_id', $request->user_id)
            ->where('dep_id', $request->id)
            ->count();

        if ($directorCount < 1) {
            $data = [
                'general_director_id' => Auth::user()->id,
                'dep_id' => $request->id,
                'director_id' =>  $request->user_id
            ];
        }

        if (isset($data)) {
            $user = DepartmentDirector::create($data);
            return response()->json($user, 200);
        }
        return response()->json(['message' => 'user already added'], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $userId
     * @param  int  $depId
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $depId)
    {
        $data = DepartmentDirector::where('director_id', $userId)
            ->where('dep_id', $depId)
            ->delete();
        return response()->json([$data, 'message' => "item deleted"], 202);
    }
}
