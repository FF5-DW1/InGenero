<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormprofileController;
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


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/apoyo', function () {
    return view('donaciones.apoyo');
})->name('apoyo');

Route::get('/gestionadmin', function () {
    return view('auth.gestionadmin');
})->name('gestionadmin');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/nosotras', function () {
    return view('about.nosotras');
})->name('nosotras');

Route::get('/profilemadrina', function () {
    return view('profile.god-mother-profile');
})->name('godmother');

Route::get('/formprofile', [FormprofileController::class, 'createForm'])->name('formprofile');
Route::post('/formprofile', [FormprofileController::class, 'storeForm']);
Route::get('/getprofiles', [FormprofileController::class, 'searchForm'])->name('getprofiles');
Route::get('/starprofile/{id}', [FormprofileController::class, 'showStarprofile'])->name('starprofile');
Route::get('/profiles', [FormprofileController::class, 'getAllProfiles'])->name('profiles');
