<?php

namespace Maya\DataTransfer\Repositories;

use Maya\Core\Eloquent\Repository;
use Maya\DataTransfer\Contracts\ImportBatch;

class ImportBatchRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return ImportBatch::class;
    }
}
