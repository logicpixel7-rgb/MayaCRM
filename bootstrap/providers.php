<?php

use App\Providers\AppServiceProvider;
use Barryvdh\DomPDF\ServiceProvider;
use Konekt\Concord\ConcordServiceProvider;
use Prettus\Repository\Providers\RepositoryServiceProvider;
use Maya\Activity\Providers\ActivityServiceProvider;
use Maya\Admin\Providers\AdminServiceProvider;
use Maya\Attribute\Providers\AttributeServiceProvider;
use Maya\Automation\Providers\WorkflowServiceProvider;
use Maya\Contact\Providers\ContactServiceProvider;
use Maya\Core\Providers\CoreServiceProvider;
use Maya\DataGrid\Providers\DataGridServiceProvider;
use Maya\DataTransfer\Providers\DataTransferServiceProvider;
use Maya\Email\Providers\EmailServiceProvider;
use Maya\EmailTemplate\Providers\EmailTemplateServiceProvider;
use Maya\Installer\Providers\InstallerServiceProvider;
use Maya\Lead\Providers\LeadServiceProvider;
use Maya\Marketing\Providers\MarketingServiceProvider;
use Maya\Product\Providers\ProductServiceProvider;
use Maya\Quote\Providers\QuoteServiceProvider;
use Maya\Tag\Providers\TagServiceProvider;
use Maya\User\Providers\UserServiceProvider;
use Maya\Warehouse\Providers\WarehouseServiceProvider;
use Maya\WebForm\Providers\WebFormServiceProvider;

return [
    /*
     * Package Service Providers...
     */
    ServiceProvider::class,
    ConcordServiceProvider::class,
    RepositoryServiceProvider::class,

    /*
     * Application Service Providers...
     */
    AppServiceProvider::class,

    /*
     * Maya Service Providers...
     */
    ActivityServiceProvider::class,
    AdminServiceProvider::class,
    AttributeServiceProvider::class,
    WorkflowServiceProvider::class,
    ContactServiceProvider::class,
    CoreServiceProvider::class,
    DataGridServiceProvider::class,
    DataTransferServiceProvider::class,
    EmailTemplateServiceProvider::class,
    EmailServiceProvider::class,
    MarketingServiceProvider::class,
    InstallerServiceProvider::class,
    LeadServiceProvider::class,
    ProductServiceProvider::class,
    QuoteServiceProvider::class,
    TagServiceProvider::class,
    UserServiceProvider::class,
    WarehouseServiceProvider::class,
    WebFormServiceProvider::class,
];
