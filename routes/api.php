<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function (Request $request) {
        return auth()->user();
    });

    //City Routes 
    Route::get('/city', [CityController::class, 'index']);
    Route::post('/add-city', [CityController::class, 'store']);
    Route::post('{id}/update-city', [CityController::class, 'update']);
    Route::get('{id}/delete-city', [CityController::class, 'destroy']);

    // Type Routes
    Route::get('/type', [TypeController::class, 'index']);
    Route::post('/add-type', [TypeController::class, 'store']);
    Route::post('{id}/update-type', [TypeController::class, 'update']);
    Route::get('{id}/delete-type', [TypeController::class, 'destroy']);
    Route::get('/users', [UserController::class, 'index']);
    Route::get('{id}/activate', [UserController::class, 'activate']);
    Route::get('{id}/deactivate', [UserController::class, 'deactivate']);
    Route::get('{id}/delete-user', [UserController::class, 'destroy']);
    
    // medical Routes
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});
Route::get('/medicals', [MedicalController::class, 'index']);
