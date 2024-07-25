<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/suma/{num1}/{num2}', [PostController::class, 'sumar']);
Route::get('/multiplicar/{num1}/{num2}', [PostController::class, 'multiplicar']);
