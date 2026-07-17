<?php

namespace Maya\EmailTemplate\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\EmailTemplate\Models\EmailTemplate;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        EmailTemplate::class,
    ];
}
