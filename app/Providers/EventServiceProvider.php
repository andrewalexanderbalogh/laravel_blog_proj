<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    /*
     * When the named Event occurs
     * We trigger the given Event-Listeners
     *
     */
    protected $listen = [
        'App\Events\ThreadCreated' => [
            'App\Listeners\NotifySubscribers',
            'App\Listeners\CheckForSpam'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
