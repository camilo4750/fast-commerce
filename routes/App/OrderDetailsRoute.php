<?php

use App\Http\Controllers\OrderDetails\OrderDetailsController;
use Illuminate\Support\Facades\Route;

Route::prefix('order-details')->group(function () {
    Route::get('/{orderId}/products', [OrderDetailsController::class, 'getProductsByOrder'])
        ->name('OrderDetails.GetProductsByOrder');
});