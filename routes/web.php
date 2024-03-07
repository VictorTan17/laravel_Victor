<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KegiatanController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [LoginController::class, 'login_page']);
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/index', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'register_page']);
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('kegiatan1', [KegiatanController::class, 'kegiatan']);
Route::resource('kegiatan', KegiatanController::class);