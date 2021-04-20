<?php

namespace App\Http\Controllers;

use App\Http\Resources\SectionCollection;
use App\Models\Section;
use App\Models\Department;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = $request->get('query');
        $id = $query['dep_id'];
        $pagination = $request->get('pagination');
        $page = $pagination['page'];
        $perpage =  $pagination['perpage'];
        $resource = Section::where('dep_id', $id)->paginate($perpage, ['*'], 'page', $page);
        return new SectionCollection($resource);
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
            'section' => ['required', 'string', 'max:100'],
        ]);
        $section = new Section();
        $section->name = $request->section;
        $section->dep_id = $request->dep_id;
        $section->save();
        return back()->with('message', 'Section successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section = Section::with('department')->findOrFail($id);
        return response()->json($section, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $request->validate([
            'section' => ['required', 'string', 'max:100'],
        ]);

        $department = Section::findOrFail($request->section_id);
        $department->name = $request->section;
        $department->dep_id = $request->dep_id;
        $department->save();
        return back()->with('message', 'Section updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section  = Section::destroy($id);
        return response()->json(['message' => 'Section deleted'], 200);
    }
}
