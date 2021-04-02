<?php

namespace App\Listeners;

use App\Models\TrackProfile;
use App\Events\RejectDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RejectDocumentListener
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
     * @param  RejectDocument  $event
     * @return void
     */
    public function handle(RejectDocument $event)
    {
        if (Auth::user()->role == "supervisor") {
            $track = TrackProfile::where('from', 'employ')->where('profile_id', $event->trackProfile_r->profile_id)->first();
            $track->status = "pending";
            $track->at_end_user = 1;
            $track->save();
        }
        if (Auth::user()->role == "department_head") {
            $track = TrackProfile::where('from', 'supervisor')->where('profile_id', $event->trackProfile_r->profile_id)->delete();
            if ($track) {
                $tracking = TrackProfile::where('from', 'employ')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $tracking->status = "pending";
                $tracking->save();
            }
        }
        if (Auth::user()->role == "director") {
            $track = TrackProfile::where('from', 'department_head')->where('profile_id', $event->trackProfile_r->profile_id)->delete();
            if ($track) {
                $tracking = TrackProfile::where('from', 'supervisor')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $tracking->status = "pending";
                $tracking->save();
            }
        }
        if (Auth::user()->role == "general_director") {
            $track = TrackProfile::where('from', 'director')->where('profile_id', $event->trackProfile_r->profile_id)->delete();
            if ($track) {
                $tracking = TrackProfile::where('from', 'department_head')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $tracking->status = "pending";
                $tracking->save();
            }
        }
        return $track;
    }
}
