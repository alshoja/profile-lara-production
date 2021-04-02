<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class SignDocument
{
    use Dispatchable;
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
