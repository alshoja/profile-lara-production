<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentHead;
use Illuminate\Support\Facades\Auth;

class DepartmentHeadsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $directorCount = DepartmentHead::where('depart_head_id', $request->user_id)
            ->where('dep_id', $request->id)
            ->count();

        if ($directorCount < 1) {
            $data = [
                'depart_head_id' => $request->user_id,
                'dep_id' => $request->id,
                'director_id' =>  Auth::user()->id
            ];
        }

        if (isset($data)) {
            $user = DepartmentHead::create($data);
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
        $data = DepartmentHead::where('depart_head_id', $userId)
            ->where('dep_id', $depId)
            ->delete();
        return response()->json([$data, 'message' => "item deleted"], 202);
    }
}
