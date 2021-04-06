<?php

namespace App\Http\Controllers;

use Exception;
use Validator;
use App\Models\Profile;
use App\Models\TimeLine;
use App\Events\SignDocument;
use App\Models\TrackProfile;
use Illuminate\Http\Request;
use App\Events\RejectDocument;
use App\Events\AddTimeLineNote;
use Illuminate\Support\Facades\DB;
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
        $profiles = Profile::with('trackings')->where(function (Builder $query) use ($search, $tab, $from, $to) {
            if ($search) {
                $query->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('nationality', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%');
            }
            if ($tab === "inbox") {
                $query->whereHas('trackings', function ($query) {
                    if (Auth::user()->role == "supervisor") {
                        $query->where('from', 'employ')
                            ->where('status', 'pending')
                            ->where('at_end_user', '!=', 1);
                    }
                    if (Auth::user()->role == "department_head") {
                        $query->where('from', 'supervisor')
                            ->where('status', 'pending')
                            ->orWhere('status', 'rejected');
                    }
                    if (Auth::user()->role == "director") {
                        $query->where('from', 'department_head')
                            ->where('status', 'pending')
                            ->orWhere('status', 'rejected');
                    }
                    if (Auth::user()->role == "general_director") {
                        $query->where('from', 'director')
                            ->where('status', 'pending')
                            ->orWhere('status', 'rejected');
                    }
                    if (Auth::user()->role == "employ") {
                        $query->where('from', 'employ')
                            ->where('status', 'pending')
                            ->where('at_end_user', 1);
                    }
                });
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
        })->orderBy('id', 'DESC')->paginate(5);
        // return response()->json($profiles, 200);

        return view('pages.inbox', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile();
        $profile->name = $request->name;
        $profile->nationality = $request->nationality;
        $profile->dob = $request->dob;
        $profile->gender = $request->gender;
        $profile->citizen_status = $request->citizen_status;
        $profile->citizen_location = $request->citizen_location;
        $profile->citizen_id = $request->citizen_id;
        $profile->citizen_uid = $request->citizen_uid;
        $profile->passport_no = $request->passport_no;
        $profile->passport_type = $request->passport_no;
        $profile->entered_by = "";
        $profile->bought_by = "";
        $profile->entity = "";
        $profile->entry_date = "";
        $profile->entity_location = "";
        $profile->shipping_no = "";
        $profile->coming_from = "";
        $profile->going_to = "";
        $profile->final_destination = "";
        $profile->profile_image = "";
        $profile->product_image = "";
        $profile->doc_image = "";
        $profile->record_status = "";
        $profile->record_dep_transfer = "";
        $profile->note = "";
        $profile->belongs_to = 1;
        $profile->is_drafted = 1;
        $profile->dep_id = session('department');
        $profile->section_id = session('section')[0];
        $profile->employ_id = Auth::user()->id;
        $profile->save();
        return response()->json(['id' => $profile->id]);
    }
    public function updateUser(Request $request)
    {
        if ($request->ajax()) {
            $entered_by = $request->input('entered_by');
            $bought_by = $request->input('bought_by');
            $entity = $request->input('entity');
            $entry_date = $request->input('entry_date');
            $entity_location = $request->input('entity_location');
            $editid = $request->input('editid');
            try {
                $data = array("entered_by" => $entered_by, "bought_by" => $bought_by, "entity" => $entity, "entry_date" => $entry_date, "entity_location" => $entity_location);
                Profile::updateData($editid, $data);
                return response()->json(['success' => 'Form is successfully submitted!']);
            } catch (\Illuminate\Database\QueryException $ex) {
                dd($ex->getMessage());
            }
        }
    }
    public function stageThree(Request $request)
    {
        $shipping_no = $request->input('shipping_no');
        $coming_from = $request->input('coming_from');
        $going_to = $request->input('going_to');
        $final_destination = $request->input('final_destination');
        $profile_image = $request->file('profile_image')->store('images');
        $product_image = $request->file('product_image')->store('images');
        $doc_image = $request->file('doc_image')->store('images');
        $note = $request->input('note');
        $editid1 = $request->input('editid1');
        $data = array("shipping_no" => $shipping_no, "coming_from" => $coming_from, "going_to" => $going_to, "final_destination" => $final_destination, "profile_image" => $profile_image, "product_image" => $product_image, "doc_image" => $doc_image, "note" => $note);
        try {
            DB::table('profiles')->where('id', $editid1)->update($data);
            return response()->json(['success' => 'Form is successfully submitted!']);
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }
    public function stageFour(Request $request)
    {
        $record_status = $request->input('record_status');
        $record_dep_transfer = $request->input('record_dep_transfer');
        $editid3 = $request->input('editid3');
        $data = array("record_status" => $record_status, "record_dep_transfer" => $record_dep_transfer);
        try {
            DB::table('profiles')->where('id', $editid3)->update($data);
            return response()->json(['success' => 'Form is successfully submitted!']);
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }
    public function stageFive(Request $request)
    {
        $belongs_to = $request->input('belongs_to');
        $editid4 = $request->input('editid4');
        $is_drafted = 0;
        $is_completed = 1;
        $data = array("belongs_to" => $belongs_to, "is_drafted" => $is_drafted, "is_completed" => $is_completed);
        try {
            DB::table('profiles')->where('id', $editid4)->update($data);
            return response()->json(['success' => 'Form is successfully submitted!']);
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profiles)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::with('department', 'section')->find($id);
        return response()->json($profile, 200);
        return view('pages.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }
    public function profileUpdate(Request $request)
    {
        $editid = $request->input('editid');
        $image_1 = $request->file('profile_image');
        $image_2 = $request->file('product_image');
        $image_3 = $request->file('doc_image');
        if ($image_1 == null) {
            $progileimage =  $request->input('profile_avatar_remove1');
        } else {
            $progileimage = $request->file('profile_image')->store('images');
        }

        if ($image_2 == null) {
            $productimage =  $request->input('profile_avatar_remove2');
        } else {
            $productimage = $request->file('product_image')->store('images');
        }
        if ($image_3 == null) {
            $docimage =  $request->input('profile_avatar_remove3');
        } else {
            $docimage = $request->file('doc_image')->store('images');
        }

        $data = array(
            "name" => $request->input('name'),
            "nationality" => $request->input('nationality'),
            "dob" => $request->input('dob'),
            "gender" => $request->input('citizen_status'),
            "citizen_location" => $request->input('citizen_location'),
            "citizen_id" => $request->input('citizen_id'),
            "citizen_uid" => $request->input('citizen_uid'),
            "passport_no" => $request->input('passport_no'),
            "passport_type" => $request->input('passport_no'),
            "entered_by" => $request->input('entered_by'),
            "bought_by" => $request->get('bought_by'),
            "entity" => $request->input('entity'),
            "entry_date" => $request->input('entry_date'),
            "entity_location" => $request->input('entity_location'),
            "shipping_no" => $request->input('shipping_no'),
            "coming_from" => $request->input('coming_from'),
            "going_to" => $request->input('going_to'),
            "final_destination" => $request->input('final_destination'),
            "profile_image" => $progileimage,
            "product_image" => $productimage,
            "doc_image" => $docimage,
            "note" => $request->input('note'),
            "record_status" => $request->input('record_status'),
            "record_dep_transfer" => $request->input('record_dep_transfer'),
            "belongs_to" => $request->input('belongs_to')
        );


        try {
            DB::table('profiles')->where('id', $editid)->update($data);
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
        return back()->with('message', 'Profile Deleted');
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
        $duplicateProfile = $existingProfile->replicate();
        $duplicateProfile->is_drafted = null;
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
        $profile = Profile::with('timeline', 'trackings')->findOrFail($id);
        return response()->json($profile, 200);
    }


    public function sigOrReject(Request $request)
    {
        $res = null;
        if (Auth::user()->role != "admin" && Auth::user()->role != "employ") {
            if ($request->action == "signed") {
                $res =  $this->signProfile($request);
            } else {
                $res = $this->rejectProfile($request);
            }
        } else {
            return response()->json(["error" => "You dont have permisison to do this action !"], 403);
        }
        return response()->json(["message" => 'Document Approved', "res" => $res], 200);
    }

    public function signProfile(Request $request)
    {
        $tracker = TrackProfile::where('profile_id', $request->profile_id)->orderBy('id', 'DESC')->first();
        $trackProfile  = new TrackProfile();
        if ($tracker) {
            $trackProfile->profile_id = $request->profile_id;
            $trackProfile->status = "pending";

            $timeLine = new TimeLine();
            $timeLine->profile_id = $request->profile_id;
            $timeLine->note = $request->note;
            $trackCheck = TrackProfile::where('from', Auth::user()->role)->where('profile_id', $request->profile_id)->count();
            if ($trackCheck == 0) {
                $signDocEvent = SignDocument::dispatch($trackProfile);
                $addEntryEvent = AddTimeLineNote::dispatch($timeLine);
            }
        }
        return $signDocEvent;
    }

    public function rejectProfile(Request $request)
    {
        $rejectedStatus = TrackProfile::where('profile_id', $request->profile_id)
            ->where('owned_by', Auth::user()->id)
            ->where('is_rejected', 1)
            ->count();
        if ($rejectedStatus == 0) {
            $trackProfile = TrackProfile::where('profile_id', $request->profile_id)->orderBy('id', 'DESC')->first();
            if ($trackProfile) {

                $trackProfile->profile_id = $request->profile_id;
                $trackProfile->id = $trackProfile->id;

                $timeLine = new TimeLine();
                $timeLine->profile_id = $request->profile_id;
                $timeLine->note = $request->note;

                $rejectDocEvent = RejectDocument::dispatch($trackProfile);
                $addEntryEvent = AddTimeLineNote::dispatch($timeLine);
            } else {
                return response()->json(['error' => 'You dont have permission'], 500);
            }
            return  $rejectDocEvent;
        } else {
            return response()->json(['message' => 'You already rejetcted it'], 200);
        }
    }

    public function reSubmit($id)
    {
        if (Auth::user()->role == "employ") {
            $trackProfile = TrackProfile::where('at_end_user', 1)->where('profile_id', $id)->first();
            $trackProfile->at_end_user = 0;
            $trackProfile->save();
        }
        return back()->with('message', 'Forwaded updated');
    }
}
