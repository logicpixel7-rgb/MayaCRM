<?php

namespace Maya\Contact\Providers;

use Maya\Contact\Models\Organization;
use Maya\Contact\Models\Person;
use Maya\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Person::class,
        Organization::class,
    ];
}
