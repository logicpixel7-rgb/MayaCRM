<?php

namespace Maya\Email\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\Email\Models\Attachment;
use Maya\Email\Models\Email;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Email::class,
        Attachment::class,
    ];
}
