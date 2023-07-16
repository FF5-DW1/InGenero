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
                'email' => 'required|email',
                'password' => 'required|min:8',
                'description' => 'required',
                'nationality' => 'required',
                'date_of_birth' => 'required|date',
                'height' => 'required|numeric',
                'weight' => 'required|numeric',
                'eyes_color' => 'required',
                'hair_color' => 'required',
                'additional_info' => 'required',
                'artistic_skills' => 'required',
                'profile_photo' => 'required',
                'message' => 'required',
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




