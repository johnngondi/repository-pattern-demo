<?php

namespace App\Providers;

use App\Contracts\PostRepositoryContract;
use App\Repositories\ArrayPostRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $postRepositoryProvider = PostRepository::class;
        if (config('database.posts_repository_provider') == 'array') {
            $postRepositoryProvider = ArrayPostRepository::class;
        }

        $this->app->bind(
            PostRepositoryContract::class,
            $postRepositoryProvider
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
