<?php

namespace App\Http\Controllers;

use App\Mail\ContactMaillable;
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
        $correo = new ContactMaillable($request->all());
        Mail::to('edcarrasmar@gmail.com')->send($correo);


        // Mostrar un mensaje de enviado
        return redirect()->route('principal')->with('info', 'Mensaje enviado');
    }
}
