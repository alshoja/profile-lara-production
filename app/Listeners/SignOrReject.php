<?php

namespace App\Listeners;

use App\Events\SignOrRejectProfile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        var_dump($event->profileTimeline);
    }
}
