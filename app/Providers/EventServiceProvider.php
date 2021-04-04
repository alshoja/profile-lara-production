<?php

namespace App\Providers;

use App\Events\AddTimeLineNote;
use App\Events\RejectDocument;
use App\Events\SignDocument;
use App\Events\SignOrRejectProfile;
use App\Listeners\RejectDocumentListener;
use App\Listeners\SignDocumentListener;
use App\Listeners\SignOrReject;
use App\Listeners\TimeLineNoteListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SignDocument::class => [
            SignDocumentListener::class,
        ],
        RejectDocument::class => [
            RejectDocumentListener::class,
        ],
        AddTimeLineNote::class => [
            TimeLineNoteListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function shouldDiscoverEvents()
    {
        return true;
    }
}
