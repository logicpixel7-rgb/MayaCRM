<?php

namespace Maya\Admin\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'contacts.person.create.after' => [
            'Maya\Admin\Listeners\Person@linkToEmail',
        ],

        'lead.create.after' => [
            'Maya\Admin\Listeners\Lead@linkToEmail',
        ],

        'activity.create.after' => [
            'Maya\Admin\Listeners\Activity@afterUpdateOrCreate',
        ],

        'activity.update.after' => [
            'Maya\Admin\Listeners\Activity@afterUpdateOrCreate',
        ],
    ];
}
