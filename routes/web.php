<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InmutasiController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\StjmController;
use App\Http\Controllers\UserController;

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
    return view('base');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:mutasi'])->group(function () {

    Route::get('/mutasi/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:setuju'])->group(function () {

    Route::get('/persetujuan/home', [HomeController::class, 'setujuHome'])->name('setuju.home');
});

Route::middleware(['auth', 'user-access:izin'])->group(function () {

    Route::get('/izin/home', [HomeController::class, 'izinHome'])->name('izin.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:master'])->group(function () {

    Route::get('/master/home', [HomeController::class, 'masterHome'])->name('master.home');
});

// side menu
Route::middleware(['auth', 'user-access:izin,admin,master'])->group(function () {
    Route::resource('seleksi/izin', controller: IzinController::class);
});

Route::middleware(['auth', 'user-access:setuju,admin,master'])->group(function () {
    Route::resource('mutasi/persetujuan', controller: StjmController::class);
});

Route::middleware(['auth', 'user-access:mutasi,admin,master'])->group(function () {
    Route::resource('mutasi/berkas', controller:MutasiController::class);
});

// Route::get('/berkas',function() {return view('login.users.berkas');})->middleware(('auth'));
// Route::get('/inberkas',function() {return view('login.users.upberkas');})->middleware(('auth'));
// Route::get('/koleksi',function() {return view('login.users.koleksi');})->middleware(('auth'));

Route::middleware(['auth', 'user-access:admin,master'])->group(function () {
    Route::resource('manajemen/fulluser', controller: UserController::class);
    Route::resource('info/inmutasi', controller: InmutasiController::class);
});
