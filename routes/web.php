<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PersediaanController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    //produk Controller
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/tambah', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/destroy/{id}', [ProdukController::class, 'destroy']);
    Route::get('/produk/cetak', [ProdukController::class, 'cetak']);

    //konsumen

    Route::get('/konsumen', [KonsumenController::class, 'index']);
    Route::get('/konsumen/tambah', [KonsumenController::class, 'create']);
    Route::post('/konsumen/store', [KonsumenController::class, 'store']);
    Route::get('/konsumen/edit/{id}', [KonsumenController::class, 'edit']);
    Route::put('/konsumen/update/{id}', [KonsumenController::class, 'update']);
    Route::get('/konsumen/destroy/{id}', [KonsumenController::class, 'destroy']);
    Route::get('/konsumen/cetak', [KonsumenController::class, 'cetak']);

    //petani
    Route::get('/petani', [PetaniController::class, 'index']);
    Route::get('/petani/tambah', [PetaniController::class, 'create']);
    Route::post('/petani/store', [PetaniController::class, 'store']);
    Route::get('/petani/edit/{id}', [PetaniController::class, 'edit']);
    Route::put('/petani/update/{id}', [PetaniController::class, 'update']);
    Route::get('/petani/destroy/{id}', [PetaniController::class, 'destroy']);
    //persediaan
    Route::get('/persediaan', [PersediaanController::class, 'index']);
    Route::get('/persediaan/tambah', [PersediaanController::class, 'create']);
    Route::post('/persediaan/store', [PersediaanController::class, 'store']);
    Route::get('/persediaan/edit/{id}', [PersediaanController::class, 'edit']);
    Route::put('/persediaan/update/{id}', [PersediaanController::class, 'update']);
    Route::get('/persediaan/destroy/{id}', [PersediaanController::class, 'destroy']);
    Route::get('/persediaan/cetak', [PersediaanController::class, 'cetak']);
    //pemeseana
    Route::get('/pemesanan', [PemesananController::class, 'index']);
    Route::get('/pemesanan/tambah', [PemesananController::class, 'create']);
    Route::post('/pemesanan/store', [PemesananController::class, 'store']);
    Route::get('/pemesanan/edit/{id}', [PemesananController::class, 'edit']);
    Route::put('/pemesanan/update/{id}', [PemesananController::class, 'update']);
    Route::get('/pemesanan/destroy/{id}', [PemesananController::class, 'destroy']);

    //jadwal
    Route::get('/jadwal', [JadwalController::class, 'index']);
    Route::get('/jadwal/tambah', [JadwalController::class, 'create']);
    Route::post('/jadwal/store', [JadwalController::class, 'store']);
    Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit']);
    Route::put('/jadwal/update/{id}', [JadwalController::class, 'update']);
    Route::get('/jadwal/destroy/{id}', [JadwalController::class, 'destroy']);
    Route::get('/jadwal/cetak', [JadwalController::class, 'cetak']);
    //user
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::put('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy']);
});
