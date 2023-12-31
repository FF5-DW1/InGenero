<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formprofile;
use Illuminate\Support\Facades\Auth;

class FormprofileController extends Controller
{
    public function createform()
    {
        // Crear una nueva instancia de Formprofile para pasarla a la vista
        $formprofile = new Formprofile();

        return view('auth.formprofile', compact('formprofile'));
    }

    public function storeform(Request $request)
    {
        //validar formulario de perfiles
        $this->validate($request, [
            'name' => 'required',
            'last_name' => 'required',
            'idiomas' => 'required',
            'date_of_birth' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'eyes_color' => 'required',
            'hair_color' => 'required',
            'additional_info' => 'required',
            'artistic_skills' => 'required',
            'profile_photo' => 'required',
            'video_url' => 'required',
        ]);

        // Crear nuevo perfil
        $formprofile = new Formprofile();
        // Actualizar los campos del perfil con los nuevos datos
        $formprofile->name = $request->input('name');
        $formprofile->last_name = $request->input('last_name');
        $formprofile->idiomas = $request->input('idiomas');
        $formprofile->date_of_birth = $request->input('date_of_birth');
        $formprofile->height = $request->input('height');
        $formprofile->weight = $request->input('weight');
        $formprofile->eyes_color = $request->input('eyes_color');
        $formprofile->hair_color = $request->input('hair_color');
        $formprofile->additional_info = $request->input('additional_info');
        $formprofile->artistic_skills = $request->input('artistic_skills');
        $formprofile->video_url = $request->input('video_url');
        $formprofile->is_active = true;

        
        
        if ($request->hasFile('profile_photo')) {
            $imagestosave = "";
            foreach ($request->file('profile_photo') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move('img', $filename);
                $imagestosave = $filename . '*' . $imagestosave;
            }
            $formprofile->profile_media = $imagestosave;
        }

        
        $formprofile->save();

        
        return redirect('/starprofile/' . $formprofile->id)->with('success', 'Perfil actualizado exitosamente');
    }





    public function searchform(Request $request)
    {
        $search = $request->input('search');
        $artistic_skills = $request->input('artistic_skills');
        $height = $request->input('height');

        // Verificar si no hay campos de búsqueda
        if (!$search && !$artistic_skills && !$height) {
            // Devolver todos los perfiles sin filtros
            $profiles = Formprofile::paginate();
        } else {
            // Aplicar los filtros de búsqueda según los campos proporcionados
            $query = Formprofile::query();

            if ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
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

    public function getallprofiles()
    {
        $profiles = Formprofile::where('is_active', true)->paginate();
        return view('profile.profiles', ['profiles' => $profiles]);
    }

    // public function showstarprofile($id)
    // {
    //     $formprofile = Formprofile::find($id);
    //     return view('profile.starprofile', ['formprofile' => $formprofile]);
    // }
    public function showstarprofile($id)
    {
        $formprofile = Formprofile::find($id);
    
        // Asegúrate de que la columna "profile_media" tenga el formato correcto en la base de datos,
        // separando los datos de cada imagen con el carácter "|"
        $imagesData = explode('*', $formprofile->profile_media);
        
        $imagenes = [];
        foreach ($imagesData as $image) {
            if (!empty($image)) {
                $imageData = explode('|', $image);
                $imagenes[] = (object) [
                    'ruta_imagen' => 'img/' . $imageData[0], // Ruta completa de la imagen
                ];
            }
        }
    
        return view('profile.starprofile', compact('formprofile', 'imagenes'));
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


    public function updateform(Request $request, $id)
    {

        // Validación de los campos del formulario (puedes agregar más campos si es necesario)
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'video_url' => 'required|string|max:255',
            // Agrega aquí la validación para el resto de campos que desees actualizar
        ]);

        // Buscar el perfil existente en la base de datos
        $formprofile = Formprofile::find($id);

        // Actualizar los campos del perfil existente con los nuevos datos
        $formprofile->name = $request->input('name');
        $formprofile->last_name = $request->input('last_name');
        $formprofile->idiomas = $request->input('idiomas');
        $formprofile->date_of_birth = $request->input('date_of_birth');
        $formprofile->height = $request->input('height');
        $formprofile->weight = $request->input('weight');
        $formprofile->eyes_color = $request->input('eyes_color');
        $formprofile->hair_color = $request->input('hair_color');
        $formprofile->additional_info = $request->input('additional_info');
        $formprofile->artistic_skills = $request->input('artistic_skills');
        $formprofile->video_url = $request->input('video_url');
        $formprofile->is_active = $request->has('is_active'); //? true : false

        if ($request->hasFile('profile_photo')) {
            $imagestosave = "";
            foreach ($request->file('profile_photo') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move('img', $filename);
                $imagestosave = $filename . '*' . $imagestosave;
            }
            $formprofile->profile_media = $imagestosave;
        }
        $formprofile->save();

        // Después de guardar, redirecciona a la página de perfil o a donde desees
        return redirect()->route('starprofile', ['id' => $id])->with('success', 'Perfil actualizado exitosamente');
    }
}
