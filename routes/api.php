<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

// Публичные маршруты
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Защищённые маршруты (требуется OAuth2 токен)
Route::middleware('auth:api')->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
});
