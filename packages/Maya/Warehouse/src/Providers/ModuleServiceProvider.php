<?php

namespace Maya\Warehouse\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\Warehouse\Models\Location;
use Maya\Warehouse\Models\Warehouse;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Location::class,
        Warehouse::class,
    ];
}
