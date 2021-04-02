<?php

namespace App\Http\Controllers;

use App\Events\AddTimeLineNote;
use App\Events\RejectDocument;
use App\Events\SignDocument;
use App\Events\SignOrRejectProfile;
use App\Models\Profile;
use App\Models\TimeLine;
use App\Models\TrackProfile;
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
        $profiles = Profile::with('trackings')->orderBy('id', 'DESC')->where(function (Builder $query) use ($search, $tab, $from, $to) {
            if ($search) {
                $query->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('nationality', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%');
            }
            if ($tab === "inbox") {
                $query->whereHas('trackings');
            }
            if ($tab === "drafts") {
                $query->Where('is_drafted', 1);
            }
            if ($tab === "completed") {
                $query->Where('is_completed', 1);
            }
            if ($from && $to) {
                $query->whereBetween('created_at', [$from, $to]);
            }
            if (Auth::user()->role == "admin") {
                return $query;
            } else if (Auth::user()->role == "employ") {
                return $query->where('employ_id', Auth::user()->id);
            } else {
                return $query->whereIn('dep_id', session('department'));
            }
        })
            ->paginate(5);
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


    public function sigOrReject(Request $request)
    {
        if (Auth::user()->role != "admin" && Auth::user()->role != "employ") {
            $Profile = Profile::findOrFail($request->profile_id);
            if ($request->action == "signed") {
                $this->signProfile($request);
            } else {
                $this->rejectProfile($request);
            }
        } else {
            return response()->json(["error" => "You dont have permisison to do this action !"], 403);
        }
    }

    public function signProfile(Request $request)
    {
        $tracker = null;
        $timeLine = new TimeLine();
        $trackProfile  = new TrackProfile();
        $tracker = TrackProfile::where('profile_id', $request->profile_id)->orderBy('id', 'DESC')->first();
        if (isset($tracker->sequencer)) {
            $trackProfile->sequencer = $tracker->sequencer + 1;
        } else {
            $trackProfile->sequencer = 1;
        }
        $trackProfile->status = "approved";

        $timeLine->profile_id = $request->profile_id;
        $timeLine->note = $request->note;

        // stashed content check
        $signDocEvent = SignDocument::dispatch($trackProfile);
        $addEntryEvent = AddTimeLineNote::dispatch($timeLine);
        return response()->json([$signDocEvent, $addEntryEvent], 200);
    }

    public function rejectProfile(Request $request)
    {
        $timeLine = new TimeLine();
        TrackProfile::where('profile_id', $request->profile_id)->orderBy('id', 'DESC')->first()->delete();
        $trackProfile = TrackProfile::where('profile_id', $request->profile_id)->orderBy('id', 'DESC')->first();
        $trackProfile->status = "rejected";

        $timeLine->profile_id = $request->profile_id;
        $timeLine->note = $request->note;

        $rejectDocEvent = RejectDocument::dispatch($trackProfile);
        $addEntryEvent = AddTimeLineNote::dispatch($timeLine);
        return response()->json([$rejectDocEvent, $addEntryEvent], 200);
    }

    public function testind()
    {
        $tracker = null;
        $tracker = TrackProfile::where('profile_id', 11)->orderBy('id', 'DESC')->first();
        if (isset($tracker->sequencer)) {
            dd('True');
        } else {
            dd('false');
        }
        return response()->json($tracker, 200);
    }
}
