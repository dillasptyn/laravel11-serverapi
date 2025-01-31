<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('/databarangs', App\Http\Controllers\Api\DataBarangController::class);
Route::apiResource('/customers', App\Http\Controllers\Api\CustomerController::class);


