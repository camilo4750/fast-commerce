<?php

namespace App\Providers;

use App\Interfaces\Repositories\Client\ClientRepositoryInterface;
use App\Interfaces\Repositories\ClientProduct\ClientProductRepositoryInterface;
use App\Interfaces\Services\Client\ClientServiceInterface;
use App\Interfaces\Services\ClientProduct\ClientProductServiceInterface;
use App\Repositories\Client\ClientRepository;
use App\Repositories\ClientProduct\ClientProductRepository;
use App\Services\Client\ClientServices;
use App\Services\ClientProduct\ClientProductService;
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
        $this->app->bind(ClientProductServiceInterface::class, ClientProductService::class);
        $this->app->bind(ClientProductRepositoryInterface::class, ClientProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
