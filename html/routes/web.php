<?php

use App\Http\Controllers\LoginController;
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
    return view('principal');
});

//rutas de login 
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']); 

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/register', function () {
    return view('auth.register-controller');
})->name('register');

Route::get('/nosotras', function () {
    return view('layouts.nosotras');
})->name('nosotras');

Route::get('/profiles', function () {
    return view('profile.profiles');
})->name('profiles');

Route::get('/profilemadrina', function () {
    return view('profile.god-mother-profile');
})->name('godmother');

Route::get('/profile', function () {
    return view('profile.star-profile');
})->name('star');


