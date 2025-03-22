<?php

namespace App\Providers;

use App\Interfaces\Repositories\Client\ClientRepositoryInterface;
use App\Interfaces\Repositories\ClientProduct\ClientProductRepositoryInterface;
use App\Interfaces\Repositories\Product\ProductRepositoryInterface;
use App\Interfaces\Services\Client\ClientServiceInterface;
use App\Interfaces\Services\ClientProduct\ClientProductServiceInterface;
use App\Interfaces\Services\Product\ProductServiceInterface;
use App\Repositories\Client\ClientRepository;
use App\Repositories\ClientProduct\ClientProductRepository;
use App\Repositories\Product\ProductRepository;
use App\Services\Client\ClientServices;
use App\Services\ClientProduct\ClientProductService;
use App\Services\Product\ProductService;
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
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
