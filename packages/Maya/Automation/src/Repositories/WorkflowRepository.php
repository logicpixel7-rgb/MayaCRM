<?php

namespace Maya\Automation\Repositories;

use Maya\Automation\Contracts\Workflow;
use Maya\Core\Eloquent\Repository;

class WorkflowRepository extends Repository
{
    /**
     * Specify Model class name.
     */
    public function model(): string
    {
        return Workflow::class;
    }
}
