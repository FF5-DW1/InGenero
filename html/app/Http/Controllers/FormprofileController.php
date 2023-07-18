<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formprofile;

class FormprofileController extends Controller
{
    public function createForm()
    {
    // Crear una nueva instancia de Formprofile para pasarla a la vista
    $formprofile = new Formprofile();

    return view('auth.formprofile', compact('formprofile'));
    }



    public function storeForm(Request $request)
    {
        // Validación de los campos del formulario (puedes agregar más campos si es necesario)
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            // Agrega aquí la validación para el resto de campos que desees
        ]);

        // Si hay un campo oculto 'id' en el formulario, entonces estamos editando un perfil existente
        // De lo contrario, estamos creando un nuevo perfil
        if ($request->has('id')) {
            // Edición de perfil existente
            $formprofile = Formprofile::findOrFail($request->input('id'));
        } else {
            // Crear nuevo perfil
            $formprofile = new Formprofile();
        }

        // Actualizar los campos del perfil con los nuevos datos
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

        // También puedes manejar la carga de la imagen aquí si es necesario
        if ($request->hasFile('profile_photo')) {
            $imagestosave = "";
            foreach ($request->file('profile_photo') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move('img', $filename);
                $imagestosave = $filename . '*' . $imagestosave;
            }
            $formprofile->profile_media = $imagestosave;
        }

        // Guardar los cambios en la base de datos
        $formprofile->save();

        // Después de guardar, redirecciona a la página de perfil o a donde desees
        return redirect('/starprofile/' . $formprofile->id)->with('success', 'Perfil actualizado exitosamente');
    }





    


    public function searchForm(Request $request)
    {
        $search = $request->input('search');
        $nationality = $request->input('nationality');
        $artistic_skills = $request->input('artistic_skills');
        $height = $request->input('height');
    
        // Verificar si no hay campos de búsqueda
        if (!$search && !$nationality && !$artistic_skills && !$height) {
            // Devolver todos los perfiles sin filtros
            $profiles = Formprofile::paginate();
        } else {
            // Aplicar los filtros de búsqueda según los campos proporcionados
            $query = Formprofile::query();
    
            if ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            }
    
            if ($nationality) {
                $query->where('nationality', $nationality);
            }
    
            if ($artistic_skills) {
                $query->where('artistic_skills', 'LIKE', '%' . $artistic_skills . '%');
            }
    
            if ($height) {
                $query->where('height', $height);
            }
    
            $profiles = $query->paginate();
        }
    
        return view('profile.profiles', ['profiles' => $profiles]);
    }








    public function getAllProfiles()
    {
        $profiles = Formprofile::paginate();
        return view('profile.profiles', ['profiles' => $profiles]);
    }

    public function showStarprofile($id)
    {
        $formprofile = Formprofile::find($id);
        return view('profile.starprofile', ['formprofile' => $formprofile]);
    }




    public function gestionadmin()
    {
        $profiles = Formprofile::paginate();
        return view('auth.gestionadmin', compact('profiles'));
    }

    public function editarperfil($id)
    {
        $formprofile = Formprofile::findOrFail($id);
        return view('auth.formprofile', compact('formprofile'));
    }


    public function updateForm(Request $request, $id)
    {
        // Validación de los campos del formulario (puedes agregar más campos si es necesario)
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            // Agrega aquí la validación para el resto de campos que desees actualizar
        ]);

        // Buscar el perfil existente en la base de datos
        $formprofile = Formprofile::find($id);

        // Actualizar los campos del perfil existente con los nuevos datos
        $formprofile->name = $request->input('name');
        $formprofile->last_name = $request->input('last_name');
        $formprofile->nationality = $request->input('nationality');
        // Agrega aquí el resto de campos que deseas actualizar

        // También puedes manejar la carga de la imagen aquí si es necesario

        $formprofile->save();

        // Después de guardar, redirecciona a la página de perfil o a donde desees
        return redirect()->route('editarperfil', ['id' => $id])->with('success', 'Perfil actualizado exitosamente');
    }
}
