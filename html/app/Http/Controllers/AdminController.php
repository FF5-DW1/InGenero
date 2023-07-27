<?php

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = new User();

        return view('auth.adminadmin', compact('formprofile'));
            
        
    }


    /* public function updateform(Request $request, $id)
    {

        if (Auth::check() && Auth::user()->is_admin) {        
            $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users,email,'.$id,
            'password' => 'required|min:8|confirmed'
        ]);

        $isAdmin = $request->has('is_admin');
        
        $user = User::find($id);

        // Actualizar los campos del perfil existente con los nuevos datos
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->password = bcrypt($request->input('password'));
        $user->is_admin = $isAdmin;
       

        $user->save();

        // Después de guardar, redirecciona a la página de perfil o a donde desees
        return redirect()->route('adminadmin', ['id' => $id])->with('success', 'Admin actualizado exitosamente');
        }
    } */

    public function destroy(Request $request, $id)
    {
        $user = auth()->user()->id;

        // Compara el adminID ID que se intenta borrar
        if ($user == $id) {
            // Mensaje de error si intenta borrarse o redirige
            return redirect()->route('adminadmin.index')
                             ->with('error', 'No puedes borrarte a ti mismo.');
        }

        // Si no intenta borrarse a sí mismo, procede con el borrado
        User::findOrFail($id)->delete();

        // Puedes agregar un mensaje de éxito si lo deseas
        return redirect()->route('adminadmin.index')
                         ->with('success', 'Administrador borrado exitosamente.');
    }
}
