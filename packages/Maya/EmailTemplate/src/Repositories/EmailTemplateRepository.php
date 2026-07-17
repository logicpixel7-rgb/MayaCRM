<?php

namespace Maya\EmailTemplate\Repositories;

use Maya\Core\Eloquent\Repository;

class EmailTemplateRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\EmailTemplate\Contracts\EmailTemplate';
    }
}
