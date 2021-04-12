<?php

namespace App\Listeners;

use App\Models\Profile;
use App\Events\Signdocument;
use App\Models\TrackProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SignDocumentListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Signdocument  $event
     * @return void
     */
    public function handle(SignDocument $event)
    {
        DB::transaction(function () use ($event) {
            $track = null;
            if (Auth::user()->role == "supervisor") {
                $track = TrackProfile::where('from', 'employ')->where('profile_id', $event->trackProfile->profile_id)->firstOrFail();
                $track->status = "approved";
                $track->at_end_user = 0;
                $track->save();
            }
            if (Auth::user()->role == "department_head") {
                $track = TrackProfile::where('from', 'supervisor')->where('profile_id', $event->trackProfile->profile_id)->firstOrFail();
                $track->where('profile_id', $event->trackProfile->profile_id);
                $track->status = "approved";
                $track->save();
            }
            if (Auth::user()->role == "director") {
                $track = TrackProfile::where('from', 'department_head')->where('profile_id', $event->trackProfile->profile_id)->firstOrFail();
                $track->where('profile_id', $event->trackProfile->profile_id);
                $track->status = "approved";
                $track->save();
            }
            if (Auth::user()->role == "general_director") {
                $track = TrackProfile::where('from', 'director')->where('profile_id', $event->trackProfile->profile_id)->firstOrFail();
                $track->where('profile_id', $event->trackProfile->profile_id);
                $track->status = "approved";
                $track->save();

                $profile = Profile::where('profile_id', $event->trackProfile->profile_id)->firstOrFail();
                $profile->is_completed = 1;
                $profile->save();
            }
            if (Auth::user()->role != "general_director" && Auth::user()->role != "employ" && Auth::user()->role != "admin") {
                $trackProfile = new TrackProfile();
                $trackProfile->from = Auth::user()->role;
                $trackProfile->profile_id =  $event->trackProfile->profile_id;
                $trackProfile->status =  $event->trackProfile->status;
                $track->is_rejected = 0;
                $trackProfile->owned_by = Auth::user()->id;
                $trackProfile->save();
                return $trackProfile;
            }
        });
    }
}
