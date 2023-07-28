<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        //verifica si el usuario tiene permisos como admin y visualiza register
        if (Auth::check() && Auth::user()->is_admin) {
            return view('auth.register');
        } else {
            return redirect()->route('login')->withErrors('No tienes permiso para registrar nuevos administradores.');
        }
        
    }

    public function store(Request $request)
    {
        //verifica si el usuario tiene permisos como admin
        if (Auth::check() && Auth::user()->is_admin) {
            $request->validate([
                'name' => 'required|string|max:250',
                'email' => 'required|email|max:250|unique:users',
                'password' => 'required|min:8|confirmed'
            ]);

            //dd($request->all());

            $isAdmin = $request->has('is_admin');

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => $isAdmin // Asigna valor booleano
            ]);
            //dd('Usuario creado');
            //dd($isAdmin);
            return back()->withSuccess('Se ha registrado un nuevo administrador exitosamente.');
        } else {
            return redirect()->route('login')->withErrors('No tienes permiso para registrar nuevos administradores.');
        }
    }
}
