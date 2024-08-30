<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CareerController;
use App\Http\Controllers\Api\PeriodController;
use App\Http\Controllers\Api\StatisticalInformationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});

Route::middleware('auth:api')->group(function () {
    Route::post('/careers', [CareerController::class, 'index']);

    Route::post('/periods', [PeriodController::class, 'index']);

    Route::post('/statistical-informations', [StatisticalInformationController::class, 'index']);
    Route::get('/statistical-informations/{id}', [StatisticalInformationController::class, 'getInformationById']);
});
