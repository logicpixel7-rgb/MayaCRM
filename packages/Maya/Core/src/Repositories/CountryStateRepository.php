<?php

namespace Maya\Core\Repositories;

use Prettus\Repository\Traits\CacheableRepository;
use Maya\Core\Eloquent\Repository;

class CountryStateRepository extends Repository
{
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\Core\Contracts\CountryState';
    }
}
