<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MultidataInsetConteroller;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/multiple-data-handle',[MultidataInsetConteroller::class,'index'])->name('multidata_insert');
});
