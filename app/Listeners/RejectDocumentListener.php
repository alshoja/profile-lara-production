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
        $trackProfile =  TrackProfile::find($event->profileTimeline->id);
        $trackProfile->status =  $event->profileTimeline->status;
        $trackProfile->save();
        return $trackProfile;
    }
}
