<?php

namespace Maya\Marketing\Repositories;

use Maya\Core\Eloquent\Repository;
use Maya\Marketing\Contracts\Campaign;

class CampaignRepository extends Repository
{
    /**
     * Specify Model class name.
     */
    public function model(): string
    {
        return Campaign::class;
    }
}
