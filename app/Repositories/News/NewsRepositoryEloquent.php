<?php

namespace App\Repositories\News;

use App\Models\News;
use App\Repositories\BaseRepository;

class NewsRepositoryEloquent extends BaseRepository implements NewsRepositoryContract
{
    protected $model;

    public function __construct(News $news)
    {
        $this->model = $news;
    }

    public function search(array $fields, string $inputSearch)
    {
        $query = $this->model->where($fields[0], 'LIKE', "%{$inputSearch}%");
        unset($fields[0]);

        foreach ($fields as $field) {
            $query->orWhere($field, 'LIKE', "%{$inputSearch}%");
        }

        return $query->get();
    }
}