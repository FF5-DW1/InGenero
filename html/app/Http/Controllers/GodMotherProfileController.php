<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\FormGodMother;

class GodMotherProfileController extends Controller
{
    public function createGodMotherForm()
    {
        $formgodmother = new FormGodMother();

        return view('auth.formgodmother', compact('formgodmother'));
    }

    public function storeGodMotherForm(Request $request)
    {
        // Validación de los campos del formulario (puedes agregar más campos si es necesario)
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'description' => 'required',
            'madrina_photo' => 'required',
        ]);


        $formgodmother = new FormGodMother();
        $formgodmother->name = $request->input('name');
        $formgodmother->last_name = $request->input('last_name');
        $formgodmother->description = $request->input('description');
        $formgodmother->is_active = true;

        if ($request->hasFile('madrina_photo')) {
            $image = $request->file('madrina_photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move('img', $filename);
            $formgodmother->profile_media = $filename;
        }
        $formgodmother->save();

        return redirect('/godmotherprofiles/')->with('success', 'Madrina actualizada exitosamente');
    }




    public function getAllGodMothers()
    {
        $godmothers = FormGodMother::where('is_active', true)->paginate();
        return view('profile.godmotherprofiles', ['godmothers' => $godmothers]);
    }



    public function gestionadminmadrina()
    {
        $godmothers = FormGodMother::paginate();
        return view('auth.gestionadminmadrina', compact('godmothers'));
    }




    public function editarmadrina($id)
    {
        $formgodmother = FormGodMother::findOrFail($id);
        return view('auth.formgodmother', compact('formgodmother'));
    }





    public function updateGodMotherForm(Request $request, $id)
    {
        // Validación de los campos del formulario (puedes agregar más campos si es necesario)
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'description' => 'required',
            // Agrega aquí la validación para el resto de campos que desees actualizar
        ]);

        // Buscar el perfil existente en la base de datos
        $formgodmother = FormGodMother::find($id);

        // Actualizar los campos de las madrinas con los nuevos datos
        $formgodmother->name = $request->input('name');
        $formgodmother->last_name = $request->input('last_name');
        $formgodmother->description = $request->input('description');
        $formgodmother->is_active = $request->input('is_active') == 'on' ? true : false;
        if ($request->hasFile('madrina_photo')) {
            $image = $request->file('madrina_photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move('img', $filename);
            $formgodmother->profile_media = $filename;
        }
        $formgodmother->save();
        
        return redirect()->route('godmotherprofiles')->with('success', 'Madrina actualizada exitosamente');
    }

}
