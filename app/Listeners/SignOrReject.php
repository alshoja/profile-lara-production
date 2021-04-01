<?php

namespace App\Listeners;

use App\Models\TimeLine;
use App\Events\SignOrRejectProfile;
use Illuminate\Support\Facades\Auth;

class SignOrReject
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
     * @param  SignOrRejectProfile  $event
     * @return void
     */
    public function handle(SignOrRejectProfile $event)
    {
        $data = $event->profileTimeline;
        $timeline = TimeLine::where('profile_id', $data->profile_id)->get();
        $timeline->profile_id = $data->profile_id;
        $timeline->name = $data->name;
        $timeline->note = $data->note;
        $timeline->user_id = Auth::user()->id;
        $timeline->is_approved = $data->is_approved;
        $timeline->is_note = $data->is_note;
        $timeline->approved_by = $data->approved_by;
        $timeline->is_rejected = $data->is_rejected;
        $timeline->general_director_id = $data->general_director_id;
        $timeline->director_id = $data->director_id;
        $timeline->depart_head_id = $data->depart_head_id;
        $timeline->supervisor_id = $data->supervisor_id;
        $timeline->is_rejected_by = $data->is_rejected_by;
        $timeline->employ_id = $data->employ_id;
        $timeline->is_notify = $data->is_notify;
        $timeline->save();
        return $timeline;
    }
}
