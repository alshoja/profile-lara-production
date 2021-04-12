<?php

namespace App\Listeners;

use App\Models\TrackProfile;
use App\Events\RejectDocument;
use App\Events\AddNotification;
use Illuminate\Support\Facades\DB;
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
        DB::transaction(function () use ($event) {
            if (Auth::user()->role == "supervisor") {
                $trackProfile = TrackProfile::where('from', 'employ')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $track = TrackProfile::where('from', 'employ')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $track->status = "pending";
                $track->at_end_user = 1;
                $track->is_rejected = 1;
                $track->is_rejected_by = Auth::user()->id;
                $track->save();
            }
            if (Auth::user()->role == "department_head") {
                $trackProfile = TrackProfile::where('from', 'supervisor')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $track = TrackProfile::where('from', 'supervisor')->where('profile_id', $event->trackProfile_r->profile_id)->delete();
                if ($track) {
                    $tracking = TrackProfile::where('from', 'employ')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                    $tracking->status = "pending";
                    $tracking->is_rejected = 1;
                    $tracking->is_rejected_by = Auth::user()->id;
                    $tracking->save();
                }
            }
            if (Auth::user()->role == "director") {
                $trackProfile = TrackProfile::where('from', 'department_head')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $track = TrackProfile::where('from', 'department_head')->where('profile_id', $event->trackProfile_r->profile_id)->delete();
                if ($track) {
                    $tracking = TrackProfile::where('from', 'supervisor')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                    $tracking->status = "pending";
                    $tracking->is_rejected = 1;
                    $tracking->is_rejected_by = Auth::user()->id;
                    $tracking->save();
                }
            }
            if (Auth::user()->role == "general_director") {
                $trackProfile = TrackProfile::where('from', 'director')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                $track = TrackProfile::where('from', 'director')->where('profile_id', $event->trackProfile_r->profile_id)->delete();
                if ($track) {
                    $tracking = TrackProfile::where('from', 'department_head')->where('profile_id', $event->trackProfile_r->profile_id)->first();
                    $tracking->status = "pending";
                    $tracking->is_rejected = 1;
                    $tracking->is_rejected_by = Auth::user()->id;
                    $tracking->save();
                }
            }

            $notificationObjects = (object)[];
            $notificationObjects->type = 'rejected';
            $notificationObjects->profile_id = $event->trackProfile_r->profile_id;
            $notificationObjects->owned_by = $trackProfile->owned_by;
            AddNotification::dispatch($notificationObjects);
            return $track;
        });
    }
}
