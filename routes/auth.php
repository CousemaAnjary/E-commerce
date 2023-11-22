<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::controller(AuthenticatedSessionController::class)->group(function () {
        Route::get('login', 'create')->name('login.create');
        Route::post('login', 'store')->name('login.store');
    });
});
