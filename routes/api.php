<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('api')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    // routes/api.php
Route::middleware('auth:sanctum')->get('/verify-token', function () {
    return response()->json(['valid' => true]);
});
    // Route de test pour vérifier que l'API répond
    Route::get('/test', function () {
        return response()->json(['message' => 'API fonctionnelle']);
    });
});