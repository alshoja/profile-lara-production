<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\DepartmentCollection;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::all();
        return view('pages.departments', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $pagination = $request->get('pagination');
        $sort = $request->get('sort');
        $field = $sort['field'];
        $sortby = $sort['sort'];
        $page = $pagination['page'];
        $perpage =  $pagination['perpage'];
        $resource = Department::orderBy($field, $sortby)->paginate($perpage, ['*'], 'page', $page);
        return new DepartmentCollection($resource);
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
            'name' => ['required', 'string', 'max:50', 'unique:departments'],
        ]);
        $department = new Department();
        $department->name = $request->name;
        $department->save();
        return back()->with('message', 'Department successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::with('sections')->findOrFail($id);
        return response()->json($department, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50', 'unique:departments'],
        ]);

        $department = Department::findOrFail($request->dep_id);
        $department->name = $request->name;
        $department->save();
        return back()->with('message', 'Department updated added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::destroy($id);
        return response()->json(['message' => 'Department deleted'], 200);
    }
}
