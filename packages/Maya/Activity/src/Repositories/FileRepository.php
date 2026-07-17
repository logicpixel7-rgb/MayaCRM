<?php

namespace Maya\Activity\Repositories;

use Maya\Activity\Contracts\File;
use Maya\Core\Eloquent\Repository;

class FileRepository extends Repository
{
    /**
     * Specify model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return File::class;
    }
}
