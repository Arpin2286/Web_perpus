<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeminjamanController;
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

Route::get('/', [DashboardController::class, 'show']);

//Data Peminjaman
Route::get('/Peminjaman', [PeminjamanController::class, 'show'])->name('TampilDataPeminjaman');
Route::get('/Peminjaman/Form', [PeminjamanController::class, 'create'])->name('TampilFormPeminjaman');
Route::post('/Peminjaman/Form', [PeminjamanController::class, 'insert'])->name('InsertPeminjaman');
Route::get('/Peminjaman/Status/Edit/{id}', [PeminjamanController::class, 'statusedit']);
Route::get('/Peminjaman/Edit/{id}', [PeminjamanController::class, 'edit']);
Route::post('/Peminjaman/Edit/{id}', [PeminjamanController::class, 'update']);
Route::get('/Peminjaman/Delete/{id}', [PeminjamanController::class, 'delete']);

//Data Mahasiswa
Route::get('/Mahasiswa', [MahasiswaController::class, 'show'])->name('TampilDataMahasiswa');
Route::get('/Mahasiswa/Form', [MahasiswaController::class, 'create'])->name('TampilFormMahasiswa');
Route::post('/Mahasiswa/Form', [MahasiswaController::class, 'insert'])->name('InsertMahasiswa');
Route::get('/Mahasiswa/Edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/Mahasiswa/Edit/{id}', [MahasiswaController::class, 'update']);
Route::get('/Mahasiswa/Delete/{id}', [MahasiswaController::class, 'delete']);

//Data Buku
Route::get('/Buku', [BukuController::class, 'show'])->name('TampilDataBuku');
Route::get('/Buku/Form', [BukuController::class, 'create'])->name('TampilFormBuku');
Route::post('/Buku/Form', [BukuController::class, 'insert'])->name('InsertBuku');
Route::get('/Buku/Edit/{id}', [BukuController::class, 'edit']);
Route::post('/Buku/Edit/{id}', [BukuController::class, 'update']);
Route::get('/Buku/Delete/{id}', [BukuController::class, 'delete']);