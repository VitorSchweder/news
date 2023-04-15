<?php

namespace App\Repositories\News;

use App\Repositories\BaseRepositoryContract;

interface NewsRepositoryContract extends BaseRepositoryContract {
    public function search(array $fields, string $query) ;
}