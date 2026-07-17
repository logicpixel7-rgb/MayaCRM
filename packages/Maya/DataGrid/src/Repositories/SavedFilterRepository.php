<?php

namespace Maya\DataGrid\Repositories;

use Maya\Core\Eloquent\Repository;
use Maya\DataGrid\Contracts\SavedFilter;

class SavedFilterRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return SavedFilter::class;
    }
}
