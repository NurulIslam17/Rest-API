<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FlatController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\UserAuthController;

Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);

Route::post('logout',[UserAuthController::class,'logout'])->middleware('auth:sanctum');
Route::resource('flats', FlatController::class);
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
