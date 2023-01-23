<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('guest')->group(function(){
    Route::view('/masuk', 'login')->name('login_view');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function(){
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::prefix('/project')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project_view');
        Route::post('/', [ProjectController::class, 'store'])->name('project.add');
    });
     Route::prefix('/kategori')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category_view');
        // Route::post('/', [ProjectController::class, 'store'])->name('project.add');
    });
});


