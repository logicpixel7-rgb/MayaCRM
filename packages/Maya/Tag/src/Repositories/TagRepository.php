<?php

namespace Maya\Tag\Repositories;

use Maya\Core\Eloquent\Repository;

class TagRepository extends Repository
{
    /**
     * Searchable fields
     */
    protected $fieldSearchable = [
        'name',
        'color',
        'user_id',
    ];

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Maya\Tag\Contracts\Tag';
    }
}
