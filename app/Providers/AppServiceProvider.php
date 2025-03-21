<?php

namespace App\Providers;

use App\Interfaces\Repositories\Client\ClientRepositoryInterface;
use App\Interfaces\Services\Client\ClientServiceInterface;
use App\Repositories\Client\ClientRepository;
use App\Services\Client\ClientServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ClientServiceInterface::class, ClientServices::class);
        $this->app->bind(ClientRepositoryInterface::class, ClientRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
