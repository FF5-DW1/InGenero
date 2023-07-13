<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('auth.login-controller');
})->name('login');



Route::get('/register', function () {
    return view('auth.register-controller');
})->name('register');

Route::view('/privada',"secret")->name('privada');

Route::get('/profile', function () {
    return view('profile.star-profile');
})->name('star');

Route::get('/admincpm', function () {
    return view('auth.admincpm-controller');
})->name('admincpm');

// Route::get('/logout', function () {
//     return view('auth.logout-controller');
// })->name('logout');



Route::get('/registeradmin',[RegisteradminController::class,'index'])->name('
registeradmin');
Route::post('/registeradmin',[RegisteradminController::class,'store']);

// Route::get('/loginadmin',[RegisterController::class,'login']);