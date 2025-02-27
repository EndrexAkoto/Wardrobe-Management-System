<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClothingItemController;

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Test Route (Public)
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

// Protected Routes (Require Authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Clothing Items Routes
    Route::get('/clothing-items', [ClothingItemController::class, 'index']);
    Route::post('/clothing-items', [ClothingItemController::class, 'store']);
    Route::get('/clothing-items/{id}', [ClothingItemController::class, 'show']);
    Route::put('/clothing-items/{id}', [ClothingItemController::class, 'update']);
    Route::delete('/clothing-items/{id}', [ClothingItemController::class, 'destroy']);
});