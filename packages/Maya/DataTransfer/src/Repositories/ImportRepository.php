<?php

namespace Maya\DataTransfer\Repositories;

use Maya\Core\Eloquent\Repository;
use Maya\DataTransfer\Contracts\Import;

class ImportRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return Import::class;
    }
}
