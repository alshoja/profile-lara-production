<?php

namespace App\Events;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SignOrRejectProfile
{
    use Dispatchable, SerializesModels;

    public $profileTimeline;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($profileTimeline)
    {
        $this->profileTimeline = $profileTimeline;
    }
}
