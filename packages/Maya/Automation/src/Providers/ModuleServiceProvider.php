<?php

namespace Maya\Automation\Providers;

use Maya\Automation\Models\Webhook;
use Maya\Automation\Models\Workflow;
use Maya\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Define the modals to map with this module.
     *
     * @var array
     */
    protected $models = [
        Workflow::class,
        Webhook::class,
    ];
}
