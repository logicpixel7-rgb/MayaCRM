<?php

namespace Maya\WebForm\Repositories;

use Maya\Core\Eloquent\Repository;

class WebFormAttributeRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\WebForm\Contracts\WebFormAttribute';
    }
}
