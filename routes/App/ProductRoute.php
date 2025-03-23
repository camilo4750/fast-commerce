<?php

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('product')->group(function () {
    Route::get('/{productId}', [ProductController::class, 'getById'])->name('Product.GetById');
});
