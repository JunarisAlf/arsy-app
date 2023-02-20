<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TrxController;
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
    Route::get('/password', [UserController::class, 'password'])->name('password');

    Route::prefix('/transaksi')->group(function () {
        Route::get('/', [TrxController::class, 'index'])->name('trx_view');
    });
    Route::prefix('/project')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project_view');
        // Route::post('/', [ProjectController::class, 'store'])->name('project.add');
    });
    Route::prefix('/kategori')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category_view');
    });
    Route::prefix('/stock')->group(function () {
        Route::get('/', [StockController::class, 'index'])->name('stock_view');
    });
    Route::prefix('/data-hutang')->group(function () {
        Route::get('/', [DebtController::class, 'index'])->name('debt_view');
    });
    Route::prefix('/data-penjualan')->group(function () {
        Route::get('/', [SalesController::class, 'index'])->name('sales_view');
    });
    Route::prefix('/kontraktor')->group(function () {
        Route::get('/', [ContractorController::class, 'index'])->name('contractor_view');
    });
    Route::prefix('/laporan')->group(function () {
        Route::get('/pengeluaran', [ReportController::class, 'pengeluaran'])->name('pengeluaran_view');
        Route::get('/pengeluaran/cetak', [ReportController::class, 'pengeluaranCetak'])->name('pengeluaran_cetak');
        
        Route::get('/pemasukan', [ReportController::class, 'pemasukan'])->name('pemasukan_view');
        Route::get('/pemasukan/cetak', [ReportController::class, 'pemasukanCetak'])->name('pemasukan_cetak');

        Route::get('/pengeluaran-dan-pemasukan', [ReportController::class, 'both'])->name('both_view');
        Route::get('/pengeluaran-dan-pemasukan/cetak', [ReportController::class, 'bothCetak'])->name('both_cetak');
        
        Route::get('/riwayat-keungan', [ReportController::class, 'history'])->name('history_view');

    });
});


