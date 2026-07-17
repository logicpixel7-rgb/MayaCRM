<?php

return [
    'leads' => [
        'name' => 'admin::app.leads.index.title',
        'repository' => 'Maya\Lead\Repositories\LeadRepository',
    ],

    'persons' => [
        'name' => 'admin::app.contacts.persons.index.title',
        'repository' => 'Maya\Contact\Repositories\PersonRepository',
    ],

    'organizations' => [
        'name' => 'admin::app.contacts.organizations.index.title',
        'repository' => 'Maya\Contact\Repositories\OrganizationRepository',
    ],

    'products' => [
        'name' => 'admin::app.products.index.title',
        'repository' => 'Maya\Product\Repositories\ProductRepository',
    ],

    'quotes' => [
        'name' => 'admin::app.quotes.index.title',
        'repository' => 'Maya\Quote\Repositories\QuoteRepository',
    ],

    'warehouses' => [
        'name' => 'admin::app.settings.warehouses.index.title',
        'repository' => 'Maya\Warehouse\Repositories\WarehouseRepository',
    ],
];
