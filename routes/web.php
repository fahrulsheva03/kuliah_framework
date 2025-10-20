<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tg4_fahrulController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/rumah', [HomeController::class, 'tampilhome']);

Route::get('/hubungi', function () {
    return view('kontak');
});

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/tgs3_fahrul_sheva', [Tg4_fahrulController::class, 'tg4_212267']);
