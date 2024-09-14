<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminKategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AdminLoginController::class,'index'])->name('login');
Route::post('/login',[AdminLoginController::class,'login']);

Route::middleware(['auth'])->group(function(){
   Route::get('/admin',[AdminController::class, 'index']);

   Route::get('/admin/admin',[AdminUserController::class,'index']);
    Route::get('/admin/admin/tambah',[AdminUserController::class,'tambah']);
    Route::post('/admin/admin/simpan',[AdminUserController::class,'simpan']);
    Route::get('/admin/admin/edit/{id}',[AdminUserController::class,'edit']);
    Route::post('/admin/admin/update/{id}',[AdminUserController::class,'update']);
    Route::get('/admin/admin/hapus/{id}',[AdminUserController::class,'hapus']);
    
    Route::get('/admin/kategori',[AdminKategoriController::class,'index']);
    Route::get('admin/kategori/tambah', [AdminKategoriController::class,'tambah']);
    Route::post('admin/kategori/simpan', [AdminKategoriController::class,'simpan']);
    Route::get('admin/kategori/edit/{id}', [AdminKategoriController::class,'edit']);
    Route::post('admin/kategori/update/{id}', [AdminKategoriController::class,'update']);
    Route::get('admin/kategori/hapus/{id}', [AdminKategoriController::class,'hapus']);

    
    Route::get('/admin/berita',[AdminBeritaController::class, 'index']);
    Route::get('/admin/berita/tambah',[AdminBeritaController::class, 'tambah']);
});