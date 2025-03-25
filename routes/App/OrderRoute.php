<?php

use App\Http\Controllers\Order\OrderController;
use Illuminate\Support\Facades\Route;

Route::prefix('order')->group(function () {
    Route::post('/store', [OrderController::class, 'store'])->name('Order.Store');
    Route::get('/{clientId}/orders', [OrderController::class, 'getOrdersByClient'])->name('OrdersByClient');
});