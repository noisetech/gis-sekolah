<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KecamatanController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    // kecamatan
    Route::get('kecamatan', [KecamatanController::class, 'index'])
        ->name('kecamatan');
    Route::get('kecamatan.data', [KecamatanController::class, 'data'])
        ->name('kecamatan.data');
    Route::get('kecamatan/tambah', [KecamatanController::class, 'tambah'])
        ->name('kecamatan.tambah');
    Route::post('kecamatan.simpan', [KecamatanController::class, 'simapan'])
        ->name('kecamatan.simpan');
    Route::get('kecamatan/edit/{id}', [KecamatanController::class, 'edit'])
        ->name('kecamatan.edit');
    Route::post('kecamatan.update', [KecamatanController::class, 'update'])
        ->name('kecamatan.update');
    Route::post('kecamatan.hapus', [KecamatanController::class, 'hapus'])
        ->name('kecamatan.hapus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
