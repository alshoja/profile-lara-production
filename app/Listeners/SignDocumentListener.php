<?php

namespace App\Listeners;

use App\Events\Signdocument;
use App\Models\TrackProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        $trackProfile = new TrackProfile();
        $trackProfile->from = Auth::user()->role;
        $trackProfile->profile_id =  $event->profileTimeline->profile_id;
        $trackProfile->status =  $event->profileTimeline->status;
        $trackProfile->owned_by = Auth::user()->id;
        $trackProfile->sequencer =  $event->profileTimeline->sequencer;
        $trackProfile->save();
        return $trackProfile;
    }
}
