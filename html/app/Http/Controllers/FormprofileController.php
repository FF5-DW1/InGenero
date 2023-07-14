<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formprofile;

class FormprofileController extends Controller
{
    public function createForm()
    {
        return view('auth.formprofile');
    }

    public function storeForm(Request $request)
    {
        $formprofile = new Formprofile();
        $formprofile->id = $request->input('id');
        $formprofile->name = $request->input('name');
        $formprofile->last_name = $request->input('last_name');
        $formprofile->nationality = $request->input('nationality');
        $formprofile->date_of_birth = $request->input('date_of_birth');
        $formprofile->height = $request->input('height');
        $formprofile->weight = $request->input('weight');
        $formprofile->eyes_color = $request->input('eyes_color');
        $formprofile->hair_color = $request->input('hair_color');
        $formprofile->additional_info = $request->input('additional_info');
        $formprofile->artistic_skills = $request->input('artistic_skills');
        if ($request->hasFile('profile_photo')) {
            $imagestosave = "";
            foreach($request->file('profile_photo') as $image)
            {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move('img', $filename);
                $imagestosave = $filename . '*' . $imagestosave; 
            }
            $formprofile->profile_media = $imagestosave;
        }
        $formprofile->save();

        return redirect('/starprofile/' . $formprofile->id);
    }

        public function searchForm(Request $request)
    {
        if($request->input('search')){
            $profiles = Formprofile::where('name', 'LIKE', '%'.$request->input('search').'%')->paginate();
            return view('profile.profiles', ['profiles'=>$profiles]);
        }
        // si no hay nada en la busca, retorna todos. Ver como llamar la funcion abajo - ver todos en un boton
        $profiles = Formprofile::paginate();
        return view('profile.profiles', ['profiles'=>$profiles]);
    }

    public function getAllProfiles()
    {
        $profiles = Formprofile::paginate();
        return view('profile.profiles', ['profiles'=>$profiles]);
    }
    
        public function showStarprofile($id)
    {
        $formprofile = Formprofile::find($id);
        return view('profile.starprofile', ['formprofile' => $formprofile]);
    }
}
