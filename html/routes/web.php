<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormprofileController;
use App\Http\Controllers\LogoutController;
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
Route::get('/', 'App\Http\Controllers\PrincipalController@showPrincipal')->name('principal');






Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'authenticate']);

// Ruta de cierre de sesión
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');



Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


/* Route::prefix('/')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
}); */



// Mostrar formulario de contacto
Route::get('/contacto', [ContactController::class, 'showContactForm'])->name('contacto');

// Enviar formulario de contacto
Route::post('/contacto', [ContactController::class, 'sendContactForm'])->name('contact.send');



Route::get('/apoyo', function () {
    return view('donaciones.apoyo');
})->name('apoyo');

Route::get('/gestionadmin', function () {
    return view('auth.gestionadmin');
})->name('gestionadmin');


Route::get('/nosotras', function () {
    return view('about.nosotras');
})->name('nosotras');

Route::get('/profilemadrina', function () {
    return view('profile.god-mother-profile');
})->name('godmother');

Route::get('/formprofile', [FormprofileController::class, 'index'])->name('formprofile')->middleware('auth');


Route::post('/formprofile', [FormprofileController::class, 'storeForm']);

Route::get('/profiles', function () {
    return view('profiles');
})->name('profiles');

// Ruta para cargar el formulario de creación de perfil
Route::get('/formprofile', [FormprofileController::class, 'createForm'])->name('formprofile');

// Ruta para guardar los datos del formulario de perfil (crear un nuevo perfil)
Route::post('/storeForm', [FormprofileController::class, 'storeForm'])->name('storeForm');

// Ruta para cargar la vista de gestión de administradores
Route::get('/gestionadmin', [FormprofileController::class, 'gestionadmin'])->name('gestionadmin');

// Ruta para editar un perfil específico
Route::get('/editarperfil/{id}', [FormprofileController::class, 'editarperfil'])->name('editarperfil');

// Ruta para actualizar un perfil específico (procesa el formulario de actualización)
Route::put('/updateForm/{id}', [FormprofileController::class, 'updateForm'])->name('updateForm');

// Ruta para buscar perfiles con filtros
Route::get('/getprofiles', [FormprofileController::class, 'searchForm'])->name('getprofiles');

// Ruta para ver un perfil específico
Route::get('/starprofile/{id}', [FormprofileController::class, 'showStarprofile'])->name('starprofile');

// Ruta para obtener todos los perfiles
Route::get('/profiles', [FormprofileController::class, 'getAllProfiles'])->name('profiles');
