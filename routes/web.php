<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\SaleController;
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

Route::get('/order', [App\Http\Controllers\SaleController::class, 'index'])->name('order');
Route::post('order', [App\Http\Controllers\SaleController::class, 'handle'])->name('orderpost');


