<?php

namespace App\Events;


use Illuminate\Foundation\Events\Dispatchable;

class AddTimeLineNote
{
    use Dispatchable;
    public $timelineNote;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($timelineNote)
    {
        $this->timelineNote = $timelineNote;
    }
}
