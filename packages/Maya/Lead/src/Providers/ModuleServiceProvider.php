<?php

namespace Maya\Lead\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\Lead\Models\Lead;
use Maya\Lead\Models\Pipeline;
use Maya\Lead\Models\Product;
use Maya\Lead\Models\Source;
use Maya\Lead\Models\Stage;
use Maya\Lead\Models\Type;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Lead::class,
        Pipeline::class,
        Product::class,
        Source::class,
        Stage::class,
        Type::class,
    ];
}
