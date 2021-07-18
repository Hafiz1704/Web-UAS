<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('makul', [App\Http\Controllers\MakulController::class, 'index'])->name('makul');
Route::get('makul-tambah', [App\Http\Controllers\MakulController::class, 'add'])->name('tambah_makul');
Route::post('makul-simpan', [App\Http\Controllers\MakulController::class, 'save'])->name('simpan_makul');
Route::get('makul-edit/{id}', [App\Http\Controllers\MakulController::class, 'edit'])->name('edit_makul');
Route::post('makul-update/{id}', [App\Http\Controllers\MakulController::class, 'update'])->name('update_makul');
Route::get('makul-hapus/{id}', [App\Http\Controllers\MakulController::class, 'delete'])->name('hapus_makul');

Route::get('mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('mahasiswa-tambah', [App\Http\Controllers\MahasiswaController::class, 'add'])->name('tambah_mahasiswa');
Route::post('mahasiswa-simpan', [App\Http\Controllers\MahasiswaController::class, 'save'])->name('simpan_mahasiswa');
Route::get('mahasiswa-edit/{id}', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('edit_mahasiswa');
Route::post('mahasiswa-update/{id}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('update_mahasiswa');
Route::get('mahasiswa-hapus/{id}', [App\Http\Controllers\MahasiswaController::class, 'delete'])->name('hapus_mahasiswa');

Route::get('nilai', [App\Http\Controllers\NilaiController::class, 'index'])->name('nilai');
Route::get('nilai-tambah', [App\Http\Controllers\NilaiController::class, 'add'])->name('tambah_nilai');
Route::post('nilai-simpan', [App\Http\Controllers\NilaiController::class, 'save'])->name('simpan_nilai');
Route::get('nilai-edit/{id}', [App\Http\Controllers\NilaiController::class, 'edit'])->name('edit_nilai');
Route::post('niali-update/{id}', [App\Http\Controllers\NilaiController::class, 'update'])->name('update_nilai');
Route::get('nilai-hapus/{id}', [App\Http\Controllers\NilaiController::class, 'delete'])->name('hapus_nilai');


