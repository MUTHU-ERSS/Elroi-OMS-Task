<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ProductController;

Route::apiResource('customers', CustomerController::class);
Route::apiResource('products', ProductController::class);
