<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\FlatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;

Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);

Route::post('logout',[UserAuthController::class,'logout'])->middleware('auth:sanctum');
Route::apiResource('product', ProductController::class)->middleware('auth:sanctum');
Route::resource('flats', FlatController::class);
