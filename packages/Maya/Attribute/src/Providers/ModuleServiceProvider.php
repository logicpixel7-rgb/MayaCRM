<?php

namespace Maya\Attribute\Providers;

use Maya\Attribute\Models\Attribute;
use Maya\Attribute\Models\AttributeOption;
use Maya\Attribute\Models\AttributeValue;
use Maya\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * @var array{
     *  0: class-string<Attribute>,
     *  1: class-string<AttributeOption>,
     *  2: class-string<AttributeValue>
     * }
     */
    protected $models = [
        Attribute::class,
        AttributeOption::class,
        AttributeValue::class,
    ];
}
