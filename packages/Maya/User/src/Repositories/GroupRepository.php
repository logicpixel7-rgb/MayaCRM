<?php

namespace Maya\User\Repositories;

use Maya\Core\Eloquent\Repository;

class GroupRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\User\Contracts\Group';
    }
}
