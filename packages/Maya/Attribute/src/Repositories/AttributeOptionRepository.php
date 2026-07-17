<?php

namespace Maya\Attribute\Repositories;

use Maya\Core\Eloquent\Repository;

class AttributeOptionRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\Attribute\Contracts\AttributeOption';
    }
}
