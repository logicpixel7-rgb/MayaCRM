<?php

return [
    'leads' => [
        'name' => 'Leads',
        'repository' => 'Maya\Lead\Repositories\LeadRepository',
        'label_column' => 'title',
    ],

    'lead_sources' => [
        'name' => 'Lead Sources',
        'repository' => 'Maya\Lead\Repositories\SourceRepository',
    ],

    'lead_types' => [
        'name' => 'Lead Types',
        'repository' => 'Maya\Lead\Repositories\TypeRepository',
    ],

    'lead_pipelines' => [
        'name' => 'Lead Pipelines',
        'repository' => 'Maya\Lead\Repositories\PipelineRepository',
    ],

    'lead_pipeline_stages' => [
        'name' => 'Lead Pipeline Stages',
        'repository' => 'Maya\Lead\Repositories\StageRepository',
    ],

    'users' => [
        'name' => 'Sales Owners',
        'repository' => 'Maya\User\Repositories\UserRepository',
    ],

    'organizations' => [
        'name' => 'Organizations',
        'repository' => 'Maya\Contact\Repositories\OrganizationRepository',
    ],

    'persons' => [
        'name' => 'Persons',
        'repository' => 'Maya\Contact\Repositories\PersonRepository',
    ],

    'warehouses' => [
        'name' => 'Warehouses',
        'repository' => 'Maya\Warehouse\Repositories\WarehouseRepository',
    ],

    'locations' => [
        'name' => 'Locations',
        'repository' => 'Maya\Warehouse\Repositories\LocationRepository',
    ],
];
