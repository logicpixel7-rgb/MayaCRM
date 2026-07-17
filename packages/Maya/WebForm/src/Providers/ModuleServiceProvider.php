<?php

namespace Maya\WebForm\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\WebForm\Models\WebForm;
use Maya\WebForm\Models\WebFormAttribute;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        WebForm::class,
        WebFormAttribute::class,
    ];
}
