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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/invest', function () {
    return view('invest');
})->middleware(['auth', 'verified'])->name('invest');
Route::get('/wallet', function () {
    return view('wallet');
})->middleware(['auth', 'verified'])->name('wallet');
Route::get('/deposit', function () {
    return view('deposit');
})->middleware(['auth', 'verified'])->name('deposit');
Route::get('/withdraw', function () {
    return view('withdraw');
})->middleware(['auth', 'verified'])->name('withdraw');

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
