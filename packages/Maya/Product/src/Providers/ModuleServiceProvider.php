<?php

namespace Maya\Product\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\Product\Models\Product;
use Maya\Product\Models\ProductInventory;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Product::class,
        ProductInventory::class,
    ];
}
