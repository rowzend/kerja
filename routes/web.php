<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IzinController;
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
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
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

Route::middleware(['auth', 'user-access:user,admin,master'])->group(function () {
    Route::resource('seleksi/izin', controller:IzinController::class);
  });

// Route::get('/berkas',function() {return view('login.users.berkas');})->middleware(('auth'));
// Route::get('/inberkas',function() {return view('login.users.upberkas');})->middleware(('auth'));
// Route::get('/koleksi',function() {return view('login.users.koleksi');})->middleware(('auth'));

Route::middleware(['auth', 'user-access:admin,master'])->group(function () {
  Route::resource('manajemen/fulluser', controller:UserController::class);
});
