<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\News\NewsRepositoryContract;
use App\Repositories\News\NewsRepositoryEloquent;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            NewsRepositoryContract::class,
            NewsRepositoryEloquent::class,
        );
    }

    /**
     * Register the application services.
     *
     * @return array
     */
    public function register(): array
    {
        return [
            NewsRepositoryContract::class,
            NewsRepositoryEloquent::class,
        ];
    }
}