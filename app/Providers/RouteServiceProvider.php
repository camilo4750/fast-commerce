<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->group(base_path('routes/App/ClientRoute.php'));

            Route::middleware('web')
                ->group(base_path('routes/App/HomeRoute.php'));

            Route::middleware('web')
                ->group(base_path('routes/App/ClientProductRoute.php'));

            Route::middleware('web')
                ->group(base_path('routes/App/ProductRoute.php'));
                
            Route::middleware('web')
                ->group(base_path('routes/App/OrderRoute.php'));
                
            Route::middleware('web')
                ->group(base_path('routes/App/OrderDetailsRoute.php'));
        });
    }
}
