<?php

namespace Maya\User\Providers;

use Maya\Core\Providers\BaseModuleServiceProvider;
use Maya\User\Models\Group;
use Maya\User\Models\Role;
use Maya\User\Models\User;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        Group::class,
        Role::class,
        User::class,
    ];
}
