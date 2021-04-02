<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class SignDocument
{
    use Dispatchable;
    public $trackProfile;


    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($trackProfile)
    {
        $this->trackProfile = $trackProfile;
    }
}
