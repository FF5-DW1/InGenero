<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarMensaje;




class ContactController extends Controller
{
    
    public function enviarCorreo(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        // Enviar el correo
        // Mail::to('aingivon@gmail.com')->send(new EnviarMensaje($validatedData));
        Mail::to('destinatario@example.com')->send(new EnviarMensaje($validatedData['message'], $validatedData));
        // Redireccionar o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'El mensaje ha sido enviado correctamente.');
    }
    

}
