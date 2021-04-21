<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use App\Models\Profile;
use App\Models\TimeLine;
use App\Events\SignDocument;
use App\Models\TrackProfile;
use Illuminate\Http\Request;
use App\Events\RejectDocument;
use App\Events\AddNotification;
use App\Events\AddTimeLineNote;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade as PDF;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tab = null;
        $perPage = null;
        $search = request()->query('search');
        $tab = $request->input('tab');
        $from = $request->input('from');
        $to = $request->input('to');
        $perPage = $request->input('perPage');
        if ($tab === null) {
            return Redirect::back();
        }
        $profiles = Profile::with('trackings')->where(function (Builder $query) use ($search, $tab, $from, $to, $perPage) {
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
            if ($tab === "pending") {
                $query->Where('is_drafted', 0);
                $query->Where('is_completed', 0);
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
            if ($perPage === null) {
                $perPage = 10;
            }
        })->orderBy('id', 'DESC')->paginate($perPage);
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
        $validator = Validator::make($request->all(), [

                  'name_arabic'  => 'required',
                   'name'  => 'required',
                    'nationality' => 'required', 
                    'dob'  => 'required',
                    'gender' => 'required',
                    'place_birth'  => 'required',
                    'address'  => 'required',
                    'referal_name'  => 'required',
                    'product_type'  => 'required',
                    'passport_no'  => 'required',
                    'passport_issue'  => 'required',
                    'date_issue'  => 'required',
            'residency'  => 'required',
                 'location'  => 'required',
                    'date_expiry'  => 'required',
                    'uid'  => 'required',
                   'proffession'  => 'required',
        ]);
        if ($validator->fails()) {
         return response()->json(['error' => $validator->errors()], 422);
        } else {
            $profile = new Profile();
            $profile->name_arabic = $request->name_arabic;

            $profile->name = $request->name;

            $profile->nationality = $request->nationality;
            $profile->dob = $request->dob;
            $profile->gender = $request->gender;
            $profile-> place_birth =$request->place_birth;
            $profile->address =$request->address;
            $profile->referal_name =$request->referal_name;
            $profile->product_type=$request->product_type;
            $profile->passport_no =$request->passport_no;
            $profile->passport_issue =$request->passport_issue;
            $profile-> date_issue =$request->date_issue;
            $profile->residency =$request->residency;
            $profile->location =$request->location;
            $profile->date_expiry =$request->date_expiry;
            $profile->uid =$request->uid;
            $profile->proffession =$request->proffession;
            $profile->inventory_name = "";
            $profile->inventory_codes = "";
            $profile->note = "";
            $profile->inventory_detials = "";
            $profile->scanned_document1 = "";
            $profile->scanned_document2 = "";
            $profile->scanned_document3 = "";
            $profile->scanned_document4 = "";
            $profile->scanned_document5 = "";
            $profile->scanned_document6 = "";
            $profile->scanned_document7 = "";
            
            $profile->is_drafted = 1;
            $profile->dep_id = session('department');
            $profile->section_id = session('section')[0];
            $profile->employ_id = Auth::user()->id;
            $profile->save();
            return response()->json(['id' => $profile->id]);
      }
    }

    public function updateUser(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'inventory_name' => 'required',
                'inventory_codes' => 'required',
                'note' => 'required',
                'inventory_detials' => 'required',

            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            } else {
                $inventory_name = $request->input('inventory_name');
                $inventory_codes = $request->input('inventory_codes');
                $note = $request->input('note');
                $inventory_detials = $request->input('inventory_detials');
                $id = $request->input('editid');

                try {
                   

                    $data = array("inventory_name" => $inventory_name, "inventory_codes" => $inventory_codes, "note" => $note, "inventory_detials" => $inventory_detials);
                    Profile::updateData($id, $data);
                    return response()->json(['success' => 'Form is successfully submitted!']);
                } catch (\Illuminate\Database\QueryException $ex) {
                    dd($ex->getMessage());
                }
            }
        }
    }

    public function stageThree(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'scanned_document1' => 'required',
            'scanned_document2' => 'required',
            'scanned_document3' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        } else {

            
            
            $scanned_document1 = $request->file('scanned_document1')->store('images');
            $scanned_document2 = $request->file('scanned_document2')->store('images');
            $scanned_document3 = $request->file('scanned_document3')->store('images');
           
            $id = $request->input('editid1');
            $data = array( "scanned_document1" => $scanned_document1, "scanned_document2" => $scanned_document2, "scanned_document3" => $scanned_document3);
            try {
                DB::table('profiles')->where('id', $id)->update($data);
                return response()->json(['success' => 'Form is successfully submitted!']);
            } catch (\Illuminate\Database\QueryException $ex) {
                dd($ex->getMessage());
            }
        }
    }

    public function stageFour(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'record_status' => 'required',
            'record_dep_transfer' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        } else {
            $record_status = $request->input('record_status');
            $record_dep_transfer = $request->input('record_dep_transfer');
            $id = $request->input('editid3');
            $data = array("record_status" => $record_status, "record_dep_transfer" => $record_dep_transfer);
            try {
                DB::table('profiles')->where('id', $id)->update($data);
                return response()->json(['success' => 'Form is successfully submitted!']);
            } catch (\Illuminate\Database\QueryException $ex) {
                dd($ex->getMessage());
            }
        }
    }

    public function stageFive(Request $request)
    {
        $id = $request->input('productid');
        $product = Product::destroy($id);
        return response()->json(['success' => 'Form is successfully submitted!']);
    }

    public function stageSix(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'belongs_to' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $belongs_to = $request->input('belongs_to');
        $id = $request->input('editid4');

        $data = array(
            "belongs_to" => $belongs_to, "is_drafted" => 0
        );
        try {
            DB::transaction(function () use ($data, $id) {
                DB::table('profiles')->where('id', $id)->update($data);
                if (count($data) > 0) {
                    $this->trigerEvent($id);
                }
            });
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
        $profile = Profile::with('department', 'section', 'products')->find($id);
        return view('pages.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */

    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [

                   'name_arabic'  => 'required',
                   'name'  => 'required',
                    'nationality' => 'required', 
                    'dob'  => 'required',
                    'gender' => 'required',
                    'place_birth'  => 'required',
                    'address'  => 'required',
                    'referal_name'  => 'required',
                    'product_type'  => 'required',
                    'passport_no'  => 'required',
                    'passport_issue'  => 'required',
                    'date_issue'  => 'required',
                    'residency'  => 'required',
                     'location'  => 'required',
                    'date_expiry'  => 'required',
                    'uid'  => 'required',
                    'proffession'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $editid = $request->input('editid');
        $image_1 = $request->file('scanned_document1');
        $image_2 = $request->file('scanned_document2');
        $image_3 = $request->file('scanned_document3');
        $image_4 = $request->file('scanned_document4');
        $image_5 = $request->file('scanned_document5');
        $image_6 = $request->file('scanned_document6');
        $image_7 = $request->file('scanned_document7');

        if ($image_1 == null) {
            $progileimage =  $request->input('profile_avatar_remove1');
        } else {
            $progileimage = $request->file('scanned_document1')->store('images');
        }

        if ($image_2 == null) {
            $productimage =  $request->input('profile_avatar_remove2');
        } else {
            $productimage = $request->file('scanned_document2')->store('images');
        }
        if ($image_3 == null) {
            $docimage =  $request->input('profile_avatar_remove3');
        } else {
            $docimage = $request->file('scanned_document3')->store('images');
        }
        if ($image_4 == null) {
            $docimage4 =  $request->input('profile_avatar_remove4');
        } else {
            $docimage4 = $request->file('scanned_document4')->store('images');
        }
        if ($image_5 == null) {
            $docimage5 =  $request->input('profile_avatar_remove5');
        } else {
            $docimage5 = $request->file('scanned_document5')->store('images');
        }
        if ($image_6 == null) {
            $docimage6 =  $request->input('profile_avatar_remove6');
        } else {
            $docimage6 = $request->file('scanned_document6')->store('images');
        }
        if ($image_7 == null) {
            $docimage7 =  $request->input('profile_avatar_remove7');
        } else {
            $docimage7 = $request->file('scanned_document7')->store('images');
        }

        $data = array(


            "name_arabic" => $request->input('name_arabic'),
            "name"=> $request->input('name'),
            "nationality"=> $request->input('nationality'),
            "dob"=> $request->input('dob'),
            "gender" => $request->input('gender'),
           "place_birth"=> $request->input('place_birth'),
           "address"=> $request->input('address'),
            "referal_name" => $request->input('referal_name'),
            "product_type" => $request->input('product_type'),
           "passport_no" => $request->input('passport_no'),
            "passport_issue"=> $request->input('passport_issue'),
            "date_issue"=> $request->input('date_issue'),
            "residency" => $request->input('residency'),
           "location"=> $request->input('location'),
            "date_expiry"=> $request->input('date_expiry'),
            "uid" => $request->input('uid'),
           "proffession"=> $request->input('proffession'),
            "inventory_name"=> $request->input('inventory_name'),
           "inventory_codes"=> $request->input('inventory_codes'),
            "note" => $request->input('note'),
            "inventory_detials" => $request->input('inventory_detials'),
            "scanned_document1" =>$progileimage,
           "scanned_document2" =>$productimage,
            "scanned_document3" =>$docimage,
            "scanned_document4" =>$docimage4,
            "scanned_document5" =>$docimage5,
            "scanned_document6" =>$docimage6,
            "scanned_document7" =>$docimage7




           
        );
        
            try {
                
                    
                DB::table('profiles')->where('id', $editid)->update($data);
                return response()->json(['success' => 'Form is successfully submitted!']);
        
            } catch (\Illuminate\Database\QueryException $ex) {
                dd($ex->getMessage());
            }

           
    }
    public function productDelete(Request $request)
    {
        $id = $request->input('productid');
        $product = Product::destroy($id);
        return response()->json(['success' => 'Form is successfully submitted!']);
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
        $duplicateProfile->is_drafted = 1;
        $duplicateProfile->is_completed = 0;
        $duplicateProfile->save();

        $this->trigerEvent($duplicateProfile->id);
        return back()->with('message', 'Forwaded updated');
    }

    /**
     * Render the specified PDF.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function renderPdf($id)
    {
        $profile = Profile::with('department', 'section', 'products', 'trackings.sign')->find($id);
        // return response()->json($profile, 200);
        $pdf = PDF::loadView('pdf', $profile);
        return $pdf->stream('invoice.pdf');
    }

    public function getProfileById($id)
    {
        $profile = Profile::with('timeline', 'trackings', 'department', 'section', 'products')->findOrFail($id);
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
            $timeLine->type = 'approved';

            $trackCheck = TrackProfile::where('from', Auth::user()->role)->where('profile_id', $request->profile_id)->count();
            if ($trackCheck == 0) {
                $signDocEvent = SignDocument::dispatch($trackProfile);
                $addEntryEvent = AddTimeLineNote::dispatch($timeLine);
                AddNotification::dispatch($timeLine);
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
                $timeLine->type = 'rejected';

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
            AddNotification::dispatch($trackProfile);
        }
        return back()->with('message', 'Forwaded updated');
    }

    public function submitDraft($id)
    {
        $profile = Profile::find($id);
        $profile->is_drafted = 0;
        $profile->save();
        if ($profile) {
            $this->trigerEvent($id);
        }
        return back()->with('message', 'Forwaded updated');
    }

    public function trigerEvent($id)
    {
        $trackProfile  = new TrackProfile();
        $trackProfile->profile_id = $id;
        $trackProfile->status = "pending";
        $trackProfile->from = Auth::user()->role;
        $trackProfile->status =  'pending';
        $trackProfile->owned_by = Auth::user()->id;
        $trackProfile->save();

        $timeLine = new TimeLine();
        $timeLine->profile_id = $id;
        $timeLine->note = 'Profile Submitted';
        $timeLine->type = 'pending';

        AddTimeLineNote::dispatch($timeLine);
        AddNotification::dispatch($timeLine);
    }
}
