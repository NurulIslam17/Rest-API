<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FamilyController;
use App\Http\Controllers\Backend\MultidataInsetConteroller;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\GoogleAuthController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\WebController;
use App\Http\Controllers\LocalizatonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('',[WebController::class,'index'])->name('home');
Route::get('lang/change', [LocalizatonController::class, 'changeLang'])->name('changeLang');
Route::get('/auth/redirect',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('/google-callback',[GoogleAuthController::class,'authCallback']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/multiple-data-handle',[MultidataInsetConteroller::class,'index'])->name('multidata_insert');
    Route::get('/family-info',[FamilyController::class,'index'])->name('family_info');
    Route::get('/create-family-info',[FamilyController::class,'createFamilyInfo'])->name('create_family');

    Route::get('/users',[UserController::class,'index'])->name('users');
    Route::get('/user-profile',[UserController::class,'user_profile'])->name('user_profile');
    Route::post('/user-profile',[UserController::class,'update_profile'])->name('user_profile');

    Route::get('/post',[PostController::class,'index'])->name('post.index');
    Route::get('/create',[PostController::class,'create'])->name('post.create');
    Route::post('/store',[PostController::class,'store'])->name('post.store');
});
