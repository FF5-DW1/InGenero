<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller 
{
    public function index(){
        //visualiza el formulario login.blade.php
        return view('auth.login');
       
    }
    public function authenticate(Request $request){
        //Validar
        $validados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //dd( $validados);
        //Comprobar pass 
        if (Auth::attempt($validados)){
           //si login ok regenero la seccion
           $request->session()->regenerate();
            //se redireciona a la home
            dd($validados);
        
            return redirect()->intended(route('auth.formprofile'))
            ->withSuccess('Logado Correctamente');
        }
        //return redirect("/")->withSuccess('Los datos introducidos no son correctos');
        return back()->withErrors([
            'email' => 'Los datos ingresados no coinciden con el registro.',
        ])->onlyInput('email');
    }
}