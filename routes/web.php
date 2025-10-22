<?php

<<<<<<< HEAD
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
=======
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

>>>>>>> origin/main
    Route::get('/', function () {
        return view('app');
    });

<<<<<<< HEAD

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
=======
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
>>>>>>> origin/main
