<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/products', ProductController::class);
Route::apiResource('/posts', PostController::class);
Route::apiResource('blogs', BlogController::class);