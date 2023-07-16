<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class GodMotherProfileController extends Controller
{

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'last_name' => 'required',
            'description' => 'required',
            // Agrega aquí las reglas de validación para otros campos si es necesario
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Procesa o guarda los datos del formulario si la validación es exitosa
    
        return redirect()->route('formulario_enviado');
    }
    


}




