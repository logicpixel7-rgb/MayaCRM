<?php

namespace Maya\DataTransfer\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\DataTransfer\Models\Import;
use Maya\DataTransfer\Models\ImportBatch;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Define models to map with repository interfaces.
     *
     * @var array
     */
    protected $models = [
        Import::class,
        ImportBatch::class,
    ];
}
