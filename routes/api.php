<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiExampleController;
use App\Http\Controllers\Api\ApiUserController;
use Laravel\Sanctum\Sanctum;

Route::get('example', [ApiExampleController::class, 'index'])->name('api.example');

Route::get('users', [ApiUserController::class, 'index'])->name('api.users.index');
Route::post('users', [ApiUserController::class, 'store'])->name('api.users.create');
