<?php

namespace Maya\Quote\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\Quote\Models\Quote;
use Maya\Quote\Models\QuoteItem;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Quote::class,
        QuoteItem::class,
    ];
}
