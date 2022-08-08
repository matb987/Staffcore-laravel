<?php

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

Route::get('/test', function () {
    return view('testpage');
})->middleware(['auth'])->name('test');

// remove abouve this line

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/serverchat', function () {
    return view('livechat');
})->middleware(['auth'])->name('livechat');

Route::get('/players', function () {
    return view('players');
})->middleware(['auth'])->name('players');

require __DIR__.'/auth.php';
