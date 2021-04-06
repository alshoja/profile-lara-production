<?php

namespace App\Http\Controllers;

use App\Events\AddTimeLineNote;
use App\Events\RejectDocument;
use App\Events\SignDocument;
use App\Events\SignOrRejectProfile;
use App\Models\Profile;
use Exception;
use App\Models\TimeLine;
use App\Models\TrackProfile;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

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
        $profile->is_drafted=1;
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
        $is_drafted=0;
        $is_completed=1;
        $data = array("belongs_to" => $belongs_to,"is_drafted" => $is_drafted,"is_completed" => $is_completed);
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
      // get the profile
      $profile = Profile::find($id);
     // return view('contacts.edit', compact('contact')); 
     // dd($profiles);
      return view('pages.edit',compact('profile'));
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
        $editid=$request->input('editid');
        $imagetest1=$request->file('profile_image');
        $imagetest2=$request->file('product_image');
        $imagetest3=$request->file('doc_image');
        if($imagetest1==null )
        {
        $progileimage=  $request->input('profile_avatar_remove1');
        }
        else
        {
            $progileimage=$request->file('profile_image')->store('images');
        }
        
        if($imagetest2==null )
        {
        $productimage=  $request->input('profile_avatar_remove2');
        }
        else{
            $productimage=$request->file('product_image')->store('images');
        }
        if($imagetest3==null )
        {
        $docimage=  $request->input('profile_avatar_remove3');
        }
        else
        {
            $docimage= $request->file('doc_image')->store('images');
        }

       $data = array("name" => $request->input('name'),
       "nationality" => $request->input('nationality'),
       "dob"=> $request->input('dob'),
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
        "profile_image" =>$progileimage,
        "product_image" =>$productimage,
        "doc_image" => $docimage,
        "note" => $request->input('note'),
        "record_status" => $request->input('record_status'),
       "record_dep_transfer" => $request->input('record_dep_transfer'),
       "belongs_to" => $request->input('belongs_to'));

        
        try {

            DB::table('profiles')->where('id', $editid)->update($data);
           echo "haidd";
        } catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
        //$profile->save();
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
