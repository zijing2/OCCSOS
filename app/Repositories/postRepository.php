<?php

namespace App\Repositories;

use App\Models\post;
use InfyOm\Generator\Common\BaseRepository;

class postRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return post::class;
    }
}
