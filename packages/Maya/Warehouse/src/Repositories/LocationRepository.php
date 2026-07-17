<?php

namespace Maya\Warehouse\Repositories;

use Maya\Core\Eloquent\Repository;

class LocationRepository extends Repository
{
    /**
     * Searchable fields
     */
    protected $fieldSearchable = [
        'name',
        'warehouse_id',
    ];

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\Warehouse\Contracts\Location';
    }
}
