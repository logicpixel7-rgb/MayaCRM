<?php

namespace Maya\Activity\Providers;

use Maya\Activity\Models\Activity;
use Maya\Activity\Models\File;
use Maya\Activity\Models\Participant;
use Maya\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Activity::class,
        File::class,
        Participant::class,
    ];
}
