<?php

namespace App\Listeners;

use App\Models\TimeLine;
use App\Events\AddTimeLineNote;
use Illuminate\Support\Facades\Auth;


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
        $timeLine = new TimeLine();
        $timeLine->name = Auth::user()->name;
        $timeLine->note = $event->timelineNote->note;
        $timeLine->user_id = Auth::user()->id;
        $timeLine->profile_id = $event->timelineNote->profile_id;
        $timeLine->type = $event->timelineNote->type;
        $timeLine->save();
        return $timeLine;
    }
}
