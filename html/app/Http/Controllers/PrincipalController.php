<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formprofile;

class PrincipalController extends Controller
{
    public function showPrincipal()
    {
        
        $profiles = Formprofile::all(); 

       
        return view('principal', ['profiles' => $profiles]);
    }

}