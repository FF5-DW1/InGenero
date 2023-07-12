<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //función de la ruta para ir formulario
    public function login(){
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
            return redirect()->intended('profile');
    
            //dd($validated);
            //Si ko, redirect back to login
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
}
