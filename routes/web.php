<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');



Route::post('/logout', function () {
    Auth::logout(); 
    return redirect('/login'); 
})->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('app');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/tambah-buku', [BukuController::class, 'create']);
    Route::post('/simpan-buku', [BukuController::class, 'store']);
    Route::get('/edit-buku/{id}', [BukuController::class, 'edit']);
    Route::put('/update-buku/{id}', [BukuController::class, 'update']);
    Route::delete('/hapus-buku/{id}', [BukuController::class, 'destroy']);
});
