<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact; // Supongamos que aquí tienes tu clase de correo personalizada
use App\Models\Contact as ModelsContact;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contacto');
    }

    public function sendContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Enviar el correo
        Mail::to('edcarrasmar@gmail.com')->send(new ModelsContact($name, $email, $message));

        // Redirigir o mostrar un mensaje de éxito
        return redirect()->back()->with('success', '¡Gracias! Tu mensaje ha sido enviado correctamente.');
    }
}
