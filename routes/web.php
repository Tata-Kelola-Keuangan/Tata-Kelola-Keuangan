<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
};
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__ . '/auth.php';

Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('Admin')
    ->group(function () {
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('users', 'UserController');
        Route::resource('posts', 'PostController');

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile-update', [ProfileController::class, 'update'])->name('profile.update');

        //user
        Route::prefix('User')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::get('/add', [UserController::class, 'create'])->name('user.create');
            Route::post('/store', [UserController::class, 'store'])->name('user.store');
            Route::get('/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');
            Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        });

        //pegawai
        Route::prefix('Pegawai')->group(function () {
            Route::get('/', [PegawaiController::class, 'indexPegawai'])->name('pegawai.index');
            Route::get('/add', [PegawaiController::class, 'create'])->name('pegawai.create');
            Route::post('/store', [PegawaiController::class, 'store'])->name('pegawai.store');
            Route::get('/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
            Route::put('/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
            Route::delete('/destroy/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
        });

        //perencanaan
        Route::prefix('Pegawai')->group(function () {
            Route::get('/', [PegawaiController::class, 'indexPegawai'])->name('pegawai.index');
            Route::get('/add', [PegawaiController::class, 'create'])->name('pegawai.create');
            Route::post('/store', [PegawaiController::class, 'store'])->name('pegawai.store');
            Route::get('/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
            Route::put('/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
            Route::delete('/destroy/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
        });

        //pelaksanaan
        Route::prefix('Pegawai')->group(function () {
            Route::get('/', [PegawaiController::class, 'indexPegawai'])->name('pegawai.index');
            Route::get('/add', [PegawaiController::class, 'create'])->name('pegawai.create');
            Route::post('/store', [PegawaiController::class, 'store'])->name('pegawai.store');
            Route::get('/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
            Route::put('/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
            Route::delete('/destroy/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
        });
    });

Auth::routes();
