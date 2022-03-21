<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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
    return view('home');
});
Route::get('/register',[RegisterController::class,'create'])->name('register.index');
Route::get('/login',[SessionController::class,'create'])->name('login.index');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::post('/login',[SessionController::class,'store'])->name('login.store');
Route::post('/comprobar',[SessionController::class,'comprobar'])->name('login.comprobar');


