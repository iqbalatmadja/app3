<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');

// Grouping routes with same controller
Route::controller(AuthController::class)->group(function(){
    Route::get('/register','register')->name('register');
    Route::post('/register','process_register')->name('process.register');
    Route::get('/login','login')->name('login');
    Route::post('/login','process_login')->name('process.login');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/logout','logout')->name('logout');
});


