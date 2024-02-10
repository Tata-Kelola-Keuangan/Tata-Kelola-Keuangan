<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->usertype == 'Admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('home'); 
    } else {
        return redirect()->route('login');
    }
});


Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Auth::routes();

//dashboard
Route::middleware(['auth', 'user-access:Admin'])->group(function () { 
    Route::get('/Admin/Dashboard', [HomeController::class, 'admin'])->name('admin.dashboard');
});


//admin
Route::prefix('Admin/User')->middleware(['auth', 'user-access:Admin'])->group(function () {
    Route::get('/', [UserController::class, 'indexAdmin'])->name('user.index');
    Route::get('/add', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update'); 
    Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

// //pegawai
// Route::prefix('Admin/Pegawai')->middleware(['auth', 'user-access:Admin'])->group(function () {
//     Route::get('/', [PegawaiController::class, 'indexPegawai'])->name('pegawai.index');
//     Route::get('/add', [PegawaiController::class, 'create'])->name('pegawai.create'); // Perbaikan nama rute
//     Route::post('/store', [PegawaiController::class, 'store'])->name('pegawai.store');
//     Route::get('/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
//     Route::put('/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update'); 
//     Route::delete('/destroy/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
// });
