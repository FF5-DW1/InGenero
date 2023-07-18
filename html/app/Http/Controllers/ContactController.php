<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        Mail::to('edcarrasmar@gmail.com')->send(new ContactFormMail($name, $email, $message));
        
        // Redirigir o mostrar un mensaje de éxito
        return redirect()->back()->with('success', '¡Gracias! Tu mensaje ha sido enviado correctamente.');
    }
}
