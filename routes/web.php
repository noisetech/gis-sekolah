<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KecamatanController;
use App\Http\Controllers\Backend\SekolahController;
use App\Http\Controllers\Frontend\PetaController;
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

    Route::get('sekolah', [SekolahController::class, 'index'])
        ->name('sekolah');
    Route::get('sekolah.data', [SekolahController::class, 'data'])
        ->name('sekolah.data');
    Route::get('sekolah/tambah', [SekolahController::class, 'tambah'])
        ->name('sekolah.tambah');
    Route::post('sekolah.simpan', [SekolahController::class, 'simpan'])
        ->name('sekolah.simpan');
    Route::get('sekolah/edit/{id}', [SekolahController::class, 'edit'])
        ->name('sekolah.edit');
    Route::get('sekolah.update', [SekolahController::class, 'update'])
        ->name('sekolah.update');
    Route::post('sekolah.hapus', [SekolahController::class, 'hapus'])
        ->name('sekolah.hapus');
});

Auth::routes();

Route::get('peta', [PetaController::class, 'index'])
    ->name('peta');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
