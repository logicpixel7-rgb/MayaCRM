<?php

namespace Maya\Marketing\Repositories;

use Maya\Core\Eloquent\Repository;
use Maya\Marketing\Contracts\Event;

class EventRepository extends Repository
{
    /**
     * Specify Model class name.
     */
    public function model(): string
    {
        return Event::class;
    }
}
