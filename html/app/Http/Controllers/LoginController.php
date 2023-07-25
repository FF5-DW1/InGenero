<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        //visualiza el formulario login.blade.php
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

        $remember = ($request->has('remember') ? true : false);
        //Comprobar pass 
        if (Auth::attempt($validados, $remember)) {
            //si login ok regenero la seccion
            $request->session()->regenerate();

            //dd($validados);

            return redirect()->intended(route('gestionadmin'));
            //->withSuccess('Logado Correctamente');
        }
        return redirect("/")->withSuccess('Los datos introducidos no son correctos');
        /* return back()->withErrors([
            'email' => 'Los datos ingresados no coinciden con el registro.',
        ])->onlyInput('email'); */
    }
}
