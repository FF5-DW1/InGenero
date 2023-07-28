<?php

namespace App\Http\Controllers;

use App\Models\FormGodMother;
use Illuminate\Http\Request;
use App\Models\Formprofile;

class PrincipalController extends Controller
{
    public function showPrincipal()
    {

        $profiles = Formprofile::where('is_active', true)->paginate();
        $godmothers = FormGodMother::where('is_active', true)->paginate();

        return view('principal', ['profiles' => $profiles, 'godmothers' => $godmothers]);
    }
}
