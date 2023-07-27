<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request){
            if (Auth::user()->is_admin == '1') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->route('login');
            } else {
                // Si no es administrador, redireccionar a una ruta apropiada
                return redirect('/')->with('message', 'No estás autorizade para cerrar sesión');
            }
        }
}
