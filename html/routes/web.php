<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormprofileController;
use App\Http\Controllers\GodMotherProfileController;
use App\Http\Controllers\LogoutController;
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
Route::get('/', 'App\Http\Controllers\PrincipalController@showPrincipal')->name('principal');

//Rutas login
Route::get('/orenegni', [LoginController::class, 'index'])->name('login'); 
Route::post('/orenegni', [LoginController::class, 'authenticate']);


// ---------------------  Rutas para perfiles de estrellas  -----------------------
    
//Rutas solo auth + admin
Route::middleware('auth', 'admin')->group(function(){

    //Ruta para crear otro admin
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    //Ruta de cierre de sesión
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    //Ruta para cargar el formulario de creación de perfil
    Route::get('/formprofile', [FormprofileController::class, 'createform'])->name('formprofile');
    
    // Ruta para cargar la vista de gestión de administradore
    Route::get('/gestionadmin', [FormprofileController::class, 'gestionadmin'])->name('gestionadmin');
    // Ruta para editar un perfil específico
    Route::get('/editarperfil/{id}', [FormprofileController::class, 'editarperfil'])->name('editarperfil');
    // Ruta para guardar los datos del formulario de perfil (crear un nuevo perfil)
    Route::post('/storeform', [FormprofileController::class, 'storeform'])->name('storeform');
    // Ruta para actualizar un perfil específico (procesa el formulario de actualización)
    Route::put('/updateform/{id}', [FormprofileController::class, 'updateform'])->name('updateform');

    //----------- Rutas madrinas admin --------

    // Ruta para cargar el formulario de creación de madrinas
    Route::get('/formmadrinas', [GodMotherProfileController::class, 'createGodMotherForm'])->name('formmadrinas');
    // Ruta para guardar los datos del formulario de madrinas (crear una nueva madrina)
    Route::post('/storeformmadrinas', [GodMotherProfileController::class, 'storeGodMotherForm'])->name('storeformmadrinas');
    // Ruta para editar una madrina específica
    Route::get('/editarmadrina/{id}', [GodMotherProfileController::class, 'editarmadrina'])->name('editarmadrina');
    // Ruta para actualizar una madrina específica (procesa el formulario de actualización)
    Route::put('/updatemadrina/{id}', [GodMotherProfileController::class, 'updateGodMotherForm'])->name('updatemadrina');
    // Ruta para cargar la vista de gestión de administradores para madrinas
    Route::get('/gestionadminmadrina', [GodMotherProfileController::class, 'gestionadminmadrina'])->name('gestionadminmadrina');

});

//------------------------------- Rutas contacto --------------//
// Mostrar formulario de contacto
Route::get('/contacto', [ContactController::class, 'showContactForm'])->name('contacto');

// // Enviar formulario de contacto
Route::post('/contacto', [ContactController::class, 'sendContactForm'])->name('contact.send');



//-------------------------------- Rutas  views y más --------
Route::get('/apoyo', function () {
    return view('donaciones.apoyo');
})->name('apoyo');

Route::get('/nosotras', function () {
    return view('about.nosotras');
})->name('nosotras');

// Ruta para buscar perfiles con filtros
Route::get('/getprofiles', [FormprofileController::class, 'searchform'])->name('getprofiles');

// Ruta para ver un perfil específico
Route::get('/starprofile/{id}', [FormprofileController::class, 'showstarprofile'])->name('starprofile');

// Ruta para obtener todos los perfiles
Route::get('/profiles', [FormprofileController::class, 'getallprofiles'])->name('profiles');

// Ruta para obtener todas las madrinas
Route::get('/godmotherprofiles', [GodMotherProfileController::class, 'getAllGodMothers'])->name('godmotherprofiles');
