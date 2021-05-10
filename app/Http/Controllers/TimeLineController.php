<?php

namespace App\Http\Controllers;

use App\Models\TimeLine;
use Illuminate\Http\Request;

class TimeLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $timeline = new TimeLine();
        $timeline->name = $request->name;
        $timeline->note = $request->note;
        $timeline->user_id = $request->user_id;
        $timeline->profile_id = $request->profile_id;
        $timeline->type = 'note';
        $timeline->save();
        return response()->json($timeline, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeLine  $timeLine
     * @return \Illuminate\Http\Response
     */
    public function show(TimeLine $timeLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeLine  $timeLine
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeLine $timeLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeLine  $timeLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeLine $timeLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeLine  $timeLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeLine $timeLine)
    {
        //
    }

    public function replyNote(Request $request)
    {
        $request->validate([
            'note' => ['required'],
            'profile_id' => ['required']
        ]);

        $timeLine = new TimeLine();
        $timeLine->name = Auth()->user()->name;
        $timeLine->note = $request->note;
        $timeLine->user_id = Auth()->user()->id;
        $timeLine->profile_id = $request->profile_id;
        $timeLine->type = 'note';
        $timeLine->is_note = $request->is_note;
        $timeLine->save();
        if ($timeLine->id) {
            return response()->json($timeLine, 200);
        } else {
            return response()->json(['error' => "An error occured"], 403);
        }
    }
}
