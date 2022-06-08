<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usermenu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::post('/checkout', [MidtransController::class, 'paymentgateway']);
Route::post('/notifications', [MidtransController::class, 'store']);
Route::get('/cetak', [MidtransController::class, 'cetakpdf']);
Route::resource('user', UserController::class);
Route::resource('menu', MenuController::class);
