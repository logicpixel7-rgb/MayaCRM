<?php

namespace Maya\DataGrid\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\DataGrid\Models\SavedFilter;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        SavedFilter::class,
    ];
}
