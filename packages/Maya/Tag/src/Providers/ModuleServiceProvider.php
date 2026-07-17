<?php

namespace Maya\Tag\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\Tag\Models\Tag;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Tag::class,
    ];
}
