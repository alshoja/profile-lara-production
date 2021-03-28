<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Builder;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = request()->query('search');
        $tab = $request->input('tab');
        $profiles = Profile::orderBy('id', 'DESC')->where(function (Builder $query) use ($search) {
            $result = null;
            // if (Auth::user()->role == "general_director") {
            //     $result =  $query->where('role', 'director');
            // }
            // if (Auth::user()->role == "director") {
            //     $result =  $query->where('role', 'department_head');
            // }
            // if (Auth::user()->role == "department_head") {
            //     $result =  $query->where('role', 'supervisor');
            // }
            // if (Auth::user()->role == "supervisor") {
            //     $result =  $query->where('role', 'employ');
            // }
            if ($search) {
                $result = $query->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('nationality', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%');
            }
            return $result;
        })
            ->paginate(15);
        return view('pages.inbox', compact('profiles'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profiles)
    {
        //
    }
    /**
     * Render the specified PDF.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function renderPdf(Profile $profiles)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }

    public function getProfileById($id)
    {
        $profile = Profile::with('timeline')->findOrFail($id);
        return response()->json($profile, 200);
    }
}
