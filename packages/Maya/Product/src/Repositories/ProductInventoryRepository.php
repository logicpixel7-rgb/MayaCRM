<?php

namespace Maya\Product\Repositories;

use Maya\Core\Eloquent\Repository;

class ProductInventoryRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\Product\Contracts\ProductInventory';
    }
}
