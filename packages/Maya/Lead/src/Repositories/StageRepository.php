<?php

namespace Maya\Lead\Repositories;

use Maya\Core\Eloquent\Repository;

class StageRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\Lead\Contracts\Stage';
    }
}
