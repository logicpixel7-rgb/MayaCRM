<?php

namespace Maya\Automation\Repositories;

use Maya\Automation\Contracts\Webhook;
use Maya\Core\Eloquent\Repository;

class WebhookRepository extends Repository
{
    /**
     * Specify Model class name.
     */
    public function model(): string
    {
        return Webhook::class;
    }
}
