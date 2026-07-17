<?php

use Maya\Admin\Providers\ModuleServiceProvider as AdminModuleServiceProvider;
use Maya\Attribute\Providers\ModuleServiceProvider as AttributeModuleServiceProvider;
use Maya\Automation\Providers\ModuleServiceProvider as AutomationModuleServiceProvider;
use Maya\Contact\Providers\ModuleServiceProvider as ContactModuleServiceProvider;
use Maya\Core\Providers\ModuleServiceProvider as CoreModuleServiceProvider;
use Maya\DataGrid\Providers\ModuleServiceProvider as DataGridModuleServiceProvider;
use Maya\DataTransfer\Providers\ModuleServiceProvider as DataTransferModuleServiceProvider;
use Maya\Email\Providers\ModuleServiceProvider as EmailModuleServiceProvider;
use Maya\EmailTemplate\Providers\ModuleServiceProvider as EmailTemplateModuleServiceProvider;
use Maya\Lead\Providers\ModuleServiceProvider as LeadModuleServiceProvider;
use Maya\Product\Providers\ModuleServiceProvider as ProductModuleServiceProvider;
use Maya\Quote\Providers\ModuleServiceProvider as QuoteModuleServiceProvider;
use Maya\Tag\Providers\ModuleServiceProvider as TagModuleServiceProvider;
use Maya\User\Providers\ModuleServiceProvider as UserModuleServiceProvider;
use Maya\Warehouse\Providers\ModuleServiceProvider as WarehouseModuleServiceProvider;
use Maya\WebForm\Providers\ModuleServiceProvider as WebFormModuleServiceProvider;

return [
    'modules' => [
        DataTransferModuleServiceProvider::class,
        AdminModuleServiceProvider::class,
        AttributeModuleServiceProvider::class,
        AutomationModuleServiceProvider::class,
        ContactModuleServiceProvider::class,
        CoreModuleServiceProvider::class,
        DataGridModuleServiceProvider::class,
        EmailTemplateModuleServiceProvider::class,
        EmailModuleServiceProvider::class,
        LeadModuleServiceProvider::class,
        ProductModuleServiceProvider::class,
        QuoteModuleServiceProvider::class,
        TagModuleServiceProvider::class,
        UserModuleServiceProvider::class,
        WarehouseModuleServiceProvider::class,
        WebFormModuleServiceProvider::class,
        DataTransferModuleServiceProvider::class,
    ],

    'register_route_models' => true,
];
