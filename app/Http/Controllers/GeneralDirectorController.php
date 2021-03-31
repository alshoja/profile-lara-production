<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentGeneralDirector;

class GeneralDirectorController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gdCount = DepartmentGeneralDirector::where('general_director_id', $request->user_id)
            ->where('dep_id', $request->id)
            ->count();

        if ($gdCount < 1) {
            $data = ['general_director_id' =>  $request->user_id, 'dep_id' => $request->id];
        }

        if (isset($data)) {
            $user = DepartmentGeneralDirector::create($data);
            return response()->json($user, 200);
        }
        return response()->json(['message' => 'user already added'], 400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
