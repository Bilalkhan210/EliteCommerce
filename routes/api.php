<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/customers', [AuthController::class, 'customers']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Product CRUD Routes
Route::apiResource('products', ProductController::class);

// Category Routes
Route::apiResource('categories', CategoryController::class);

// Brand Routes
Route::apiResource('brands', BrandController::class);

// Order Routes
Route::post('/orders', [\App\Http\Controllers\OrderController::class, 'store']);
Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'index']);
