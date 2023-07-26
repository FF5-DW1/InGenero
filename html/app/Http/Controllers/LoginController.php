<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // Mensaje si el usuario está autenticado
        if (Auth::check()) {
            return redirect()->route('gestionadmin')->withErrors(['default' => 'Ya estás logueade.']);
        }
        return view('auth.login');
    }
    
    public function authenticate(Request $request)
    {
        //Validar
        $validados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //dd( $validados);

        //$remember = ($request->has('remember') ? true : false);
        //Comprobar pass 
        if (Auth::attempt($validados)) {
            //si login ok regenero la seccion
            $request->session()->regenerate();

            //->withSuccess('Logado Correctamente');
            return redirect()->route('gestionadmin')->with('success', '¡Estás logueade!');
            
        }
        //inicio sesión falla
        return redirect()->route('login')->withErrors(['default' => 'Error: Parece que los datos no son correctos.']);
    }
}
