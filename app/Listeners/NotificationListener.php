<?php

namespace App\Listeners;

use App\Events\AddNotification;
use App\Models\Notification;
use App\Events\AddTimeLineNote;
use App\Models\DepartmentDirector;
use App\Models\DepartmentGeneralDirector;
use App\Models\DepartmentHead;
use App\Models\DepartmentSupervisor;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(AddNotification $event)
    {
        $dep_array = [];
        $dep_id = Profile::find($event->notification->profile_id)->dep_id;
        if (Auth::user()->role == "employ") {
            $dep_array = DepartmentSupervisor::where('dep_id', $dep_id)->pluck('supervisor_id');
        }
        if (Auth::user()->role == "supervisor") {
            $dep_array = DepartmentHead::where('dep_id', $dep_id)->pluck('depart_head_id');
        }
        if (Auth::user()->role == "department_head") {
            $dep_array = DepartmentDirector::where('dep_id', $dep_id)->pluck('director_id');
        }
        if (Auth::user()->role == "director") {
            $dep_array = DepartmentGeneralDirector::where('dep_id', $dep_id)->pluck('general_director_id');
        }
        if (Auth::user()->role == "general_director") {
            $dep_array = DepartmentDirector::where('dep_id', $dep_id)->pluck('director_id');
        }
        if ($event->notification->type = 'rejected') {
            $notification = new Notification();
            $notification->user_id = Auth::user()->id;
            $notification->owned_by = $event->notification->owned_by;
            $notification->message = 'You got new item in inbox Form.' . Auth::user()->name;
            $notification->save(); 
        } else {
            foreach ($dep_array as $department) {
                $notification = new Notification();
                $notification->user_id = Auth::user()->id;
                $notification->notify_id = $department;
                $notification->message = 'You got new item in inbox Form.' . Auth::user()->name;
                $notification->save();
            }
        }
        return $notification;
    }
}
