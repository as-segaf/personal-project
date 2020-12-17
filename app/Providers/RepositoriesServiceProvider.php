<?php

namespace App\Providers;

use App\Repositories\ChannelGenreRepository;
use App\Repositories\ChannelGenreRepositoryInterface;
use App\Repositories\GenreRepository;
use App\Repositories\GenreRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(GenreRepositoryInterface::class, GenreRepository::class);
        $this->app->bind(ChannelGenreRepositoryInterface::class, ChannelGenreRepository::class);
    }
}
