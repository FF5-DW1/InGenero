<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //función de la ruta para ir formulario
    public function index(){
        return view('auth.login');
    }

    //funcion comprobar el login
    public function authenticate(Request $request){
        //validar datos, email y pass
        //dd($request->all());
        $validated =$request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //comprobar pass Hash
        if (Auth::attempt($validated)) {
            
            //Si ok, login
            //regenero sesion
            $request->session()->regenerate();
            //redirige donde quiera
            return redirect()->route('profile', auth()->user()->username);
    
            //dd($validated);
            //Si ko, redirect back to login
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email'); 
        }
    }
}

        /* $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                // Usuario autenticado y es administrador
                // Redirigir a la página de administrador
            } else {
                // Usuario autenticado pero no es administrador
                // Redirigir a la página de acceso denegado o mostrar un error
            }
        } else {
            // Credenciales inválidas
            // Redirigir al formulario de inicio de sesión con un mensaje de error
            }
        }
 */

