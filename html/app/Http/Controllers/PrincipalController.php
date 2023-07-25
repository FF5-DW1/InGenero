<?php

namespace App\Http\Controllers;

use App\Models\FormGodMother;
use Illuminate\Http\Request;
use App\Models\Formprofile;

class PrincipalController extends Controller
{
    public function showPrincipal()
    {

        $profiles = Formprofile::all();
        $godmothers = FormGodMother::all();

        return view('principal', ['profiles' => $profiles, 'godmothers' => $godmothers]);
    }
}
