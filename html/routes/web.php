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
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

//rutas de login 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']); 

Route::post('/login', [LoginController::class, 'logout'])->name('login');


Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', function () {
    return view('auth.form-create-star');
})->name('createstar');

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


