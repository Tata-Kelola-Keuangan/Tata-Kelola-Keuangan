<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    RoleController,
    UserController,
    PegawaiController,
    UnitController
};
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PelaksanaanController;
use App\Http\Controllers\PerencanaanController;
use App\Http\Controllers\SubPerencanaanController;
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

// Route::get('/', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('admin.dashboard');

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'admin'])->name('admin.dashboard')->middleware(['auth']);

Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('Admin')->middleware(['auth'])->group(function () {
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('users', 'UserController');

    //user
    Route::prefix('User')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/add', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    });

    //unit
    Route::prefix('Unit')->group(function () {
        Route::get('/', [UnitController::class, 'index'])->name('unit.index');
        Route::get('/add', [UnitController::class, 'create'])->name('unit.create');
        Route::post('/store', [UnitController::class, 'store'])->name('unit.store');
        Route::get('/edit/{unit}', [UnitController::class, 'edit'])->name('unit.edit');
        Route::put('/update/{unit}', [UnitController::class, 'update'])->name('unit.update');
        Route::delete('/destroy/{unit}', [UnitController::class, 'destroy'])->name('unit.destroy');
    });

    //pegawai
    Route::prefix('Pegawai')->group(function () {
        Route::get('/', [PegawaiController::class, 'index'])->name('pegawai.index');
        Route::get('/add', [PegawaiController::class, 'create'])->name('pegawai.create');
        Route::post('/store', [PegawaiController::class, 'store'])->name('pegawai.store');
        Route::get('/edit/{pegawai}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
        Route::put('/update/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
        Route::delete('/destroy/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    });

    //perencanaan
    Route::prefix('Perencanaan')->group(function () {
        Route::get('/', [PerencanaanController::class, 'index'])->name('perencanaan.index');
        Route::get('/add', [PerencanaanController::class, 'create'])->name('perencanaan.create');
        Route::post('/store', [PerencanaanController::class, 'store'])->name('perencanaan.store');
        Route::get('/edit/{Perencanaan}', [PerencanaanController::class, 'edit'])->name('perencanaan.edit');
        Route::put('/update/{Perencanaan}', [PerencanaanController::class, 'update'])->name('perencanaan.update');
        Route::get('/show/{id}', [PerencanaanController::class, 'show'])->name('perencanaan.show');
        Route::delete('/destroy/{Perencanaan}', [PerencanaanController::class, 'destroy'])->name('perencanaan.destroy');
    });

    //sub perencanaan
    Route::prefix('Perencanaan/Sub_Perencanaan')->group(function () {
        Route::get('/view/{id}', [SubPerencanaanController::class, 'index'])->name('perencanaan.sub_perencanaan.index');
        Route::get('/add', [subPerencanaanController::class, 'create'])->name('perencanaan.sub_perencanaan.create');
        Route::post('/store', [subPerencanaanController::class, 'store'])->name('perencanaan.sub_perencanaan.store');
        Route::get('/edit/{id}', [subPerencanaanController::class, 'edit'])->name('perencanaan.sub_perencanaan.edit');
        Route::put('/update/{id}', [subPerencanaanController::class, 'update'])->name('perencanaan.sub_perencanaan.update');
        Route::get('/show/{id}', [subPerencanaanController::class, 'show'])->name('perencanaan.sub_perencanaan.show');
        Route::delete('/destroy/{id}', [subPerencanaanController::class, 'destroy'])->name('perencanaan.sub_perencanaan.destroy');
    });

    //pelaksanaan
    Route::prefix('Pelaksanaan')->group(function () {
        Route::get('/', [PelaksanaanController::class, 'index'])->name('pelaksanaan.index');
        Route::get('/add', [PelaksanaanController::class, 'create'])->name('pelaksanaan.create');
        Route::post('/store', [PelaksanaanController::class, 'store'])->name('pelaksanaan.store');
        Route::get('/edit/{Pelaksanaan}', [PelaksanaanController::class, 'edit'])->name('pelaksanaan.edit');
        Route::put('/update/{Pelaksanaan}', [PelaksanaanController::class, 'update'])->name('pelaksanaan.update');
        Route::delete('/destroy/{Pelaksanaan}', [PelaksanaanController::class, 'destroy'])->name('pelaksanaan.destroy');
    });
});
