<?php

namespace Maya\Activity\Repositories;

use Maya\Core\Eloquent\Repository;

class ParticipantRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\Activity\Contracts\Participant';
    }
}
