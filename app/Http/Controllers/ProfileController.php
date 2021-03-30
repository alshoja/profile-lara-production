<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
        $from = $request->input('from');
        $to = $request->input('to');
        $profiles = Profile::orderBy('id', 'DESC')->where(function (Builder $query) use ($search, $tab, $from, $to) {
            if ($search) {
                $query->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('nationality', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%');
            }
            if ($tab === "inbox") {
                $query->orWhere('is_notify', 1);
            }
            if ($tab === "drafts") {
                $query->orWhere('is_drafted', 1);
            }
            if ($tab === "completed") {
                $query->orWhere('is_completed', 1);
            }
            if ($from && $to) {
                $query->whereBetween('created_at', [$from, $to]);
            }
            return $query;
        })
            ->paginate(10);
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
    public function destroy($id)
    {
        if (Auth::user()->delete) {
            $profiles = Profile::destroy($id);
        }
        return back()->with('message', 'Profile Deleted');
    }

    public function forwardAsNew($id)
    {
        $existingProfile = Profile::find($id);

        //Clone a attribute of existing row into a new copy
        $duplicateProfile = $existingProfile->replicate();

        //Change a name of the copy (duplicate) Profile by appending id of the existing Profile to make the name of duplicate Profile unique
        $duplicateProfile->general_director_id = null;
        $duplicateProfile->director_id = null;
        $duplicateProfile->depart_head_id = null;
        $duplicateProfile->supervisor_id = null;
        $duplicateProfile->is_completed = null;
        $duplicateProfile->is_drafted = null;
        $duplicateProfile->is_notify = null;

        //Now Create a duplicate Profile
        $duplicateProfile->save();
        return back()->with('message', 'Forwaded updated');
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
