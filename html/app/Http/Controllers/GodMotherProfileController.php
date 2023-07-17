<?php

namespace App\Http\Controllers;

use App\Models\FormGodMother;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GodMotherProfileController extends Controller
{
    public function createGodMotherForm()
    {
        $formGodMother = new FormGodMother();

        return view('auth.formgodmother', compact('formGodMother'));
    }

    public function storeGodMotherForm(Request $request)
    {
        $rules = [
            'name' => 'required',
            'last_name' => 'required',
            'description' => 'required',
            'madrina_photo' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Procesa o guarda los datos del formulario si la validación es exitosa

        $formGodMother = new FormGodMother();

        // Actualizar los campos de las madrinas con los nuevos datos
        $formGodMother->name = $request->input('name');
        $formGodMother->last_name = $request->input('last_name');
        $formGodMother->description = $request->input('description');
        $formGodMother->is_active = true;
        if ($request->hasFile('madrina_photo')) {
            $image = $request->file('madrina_photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move('img', $filename);
            $formGodMother->profile_media = $filename;
        }
        $formGodMother->save();

        return redirect('/godmotherprofiles')->with('success', 'Perfil actualizado exitosamente');
    }

    public function getAllGodMothers()
    {
        $godmothers = FormGodMother::paginate();
        return view('profile.godmotherprofiles', ['godmothers' => $godmothers]);
    }

    public function editarmadrina($id)
    {
        $formGodMother = FormGodMother::findOrFail($id);
        return view('auth.formgodmother', compact('formGodMother'));
    }

    public function updateGodMotherForm(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'last_name' => 'required',
            'description' => 'required',
            'madrina_photo' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Procesa o guarda los datos del formulario si la validación es exitosa

        $formGodMother = FormGodMother::find($id);

        // Actualizar los campos de las madrinas con los nuevos datos
        $formGodMother->name = $request->input('name');
        $formGodMother->last_name = $request->input('last_name');
        $formGodMother->description = $request->input('description');
        $formGodMother->is_active = false;
        // if ($request->hasFile('madrina_photo')) {
        //     $image = $request->file('madrina_photo');
        //     $filename = time() . '_' . $image->getClientOriginalName();
        //     $image->move('img', $filename);
        //     $formGodMother->profile_media = $filename;
        // }
        $formGodMother->save();

        return redirect('/godmotherprofiles')->with('success', 'Perfil actualizado exitosamente');
    }

}
