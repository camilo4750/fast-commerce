<?php

use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;

Route::prefix('client')->group(function () {
    Route::get('/getById/{clientId}', [ClientController::class, 'getById'])->name('Client.GetById');
    Route::post('/getEmail', [ClientController::class, 'existsByEmail'])->name('Client.ExistsByEmail');
});