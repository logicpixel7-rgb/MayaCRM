<?php

namespace Maya\Marketing\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\Marketing\Models\Campaign;
use Maya\Marketing\Models\Event;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Define the module's array.
     *
     * @var array
     */
    protected $models = [
        Event::class,
        Campaign::class,
    ];
}
