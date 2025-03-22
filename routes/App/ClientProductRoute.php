<?php

use App\Http\Controllers\ClientProduct\ClientProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('client-products')->group(function () {
    Route::get('/{clientId}/products', [ClientProductController::class, 'getProductsByClient'])->name('ProductsByClient');
});
