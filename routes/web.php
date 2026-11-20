<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class)
        ->only(['index', 'create', 'store', 'edit', 'update']);

    Route::resource('users', UserController::class)
        ->only(['index', 'create', 'store', 'edit', 'update']);
});

require __DIR__.'/auth.php';
