<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('home')->group(function () {
    Route::get('/Dashboard/{clientId}', [HomeController::class, 'index'])->name('Home.Index');
});
