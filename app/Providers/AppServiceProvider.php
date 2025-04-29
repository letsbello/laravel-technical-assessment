<?php

namespace App\Providers;

use App\Services\ActorService;
use App\Services\StarWarsService;
use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\ActorServiceInterface;
use App\Services\Interfaces\StarWarsServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ActorServiceInterface::class, ActorService::class);
        $this->app->bind(StarWarsServiceInterface::class, StarWarsService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
