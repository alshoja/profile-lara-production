<?php

namespace App\Listeners;

use App\Models\TimeLine;
use App\Events\AddTimeLineNote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TimeLineNoteListener
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
     * @param  AddTimeLineNote  $event
     * @return shouldDiscoverEvents
     */
    public function handle(AddTimeLineNote $event)
    {
        $note = $event->timelineNote;
        $timeLine = new TimeLine();
        $timeLine->name = Auth::user()->name;
        $timeLine->note = $$event->timelineNote->note;
        $timeLine->user_id = Auth::user()->id;
        $timeLine->profile_id = $$event->timelineNote->profile_id;
        $timeLine->save();
        return $timeLine;
    }
}
