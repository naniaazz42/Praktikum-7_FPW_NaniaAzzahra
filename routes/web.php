<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\auth\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.post');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('app');
    });


Route::get('/home', function () {
    return view('home'); 
});


Route::get('/buku', [BukuController::class, 'index']); 

// Menampilkan form tambah buku (pakai method create di BukuController)
Route::get('/tambah_buku', [BukuController::class, 'create']); 

// Menyimpan data buku dari form ke database (pakai method store di BukuController)
Route::post('/simpan_buku', [BukuController::class, 'store']);

// Edit buku
Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);

// Update buku
Route::put('/buku/{id}', [BukuController::class, 'update']);

// Hapus buku
Route::delete('/buku/{id}', [BukuController::class, 'destroy']);


});