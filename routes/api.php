<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiExampleController;

Route::get('example', [ApiExampleController::class, 'index'])->name('api.example');