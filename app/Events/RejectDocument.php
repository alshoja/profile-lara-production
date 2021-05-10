<?php

namespace App\Events;


use Illuminate\Foundation\Events\Dispatchable;

class RejectDocument
{
    use Dispatchable;
    public $trackProfile_r;


    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($trackProfile_r)
    {
        $this->trackProfile_r = $trackProfile_r;
    }
}
