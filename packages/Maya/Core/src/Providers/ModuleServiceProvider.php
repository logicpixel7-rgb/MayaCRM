<?php

namespace Maya\Core\Providers;

use Maya\Core\Models\CoreConfig;
use Maya\Core\Models\Country;
use Maya\Core\Models\CountryState;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        CoreConfig::class,
        Country::class,
        CountryState::class,
    ];
}
