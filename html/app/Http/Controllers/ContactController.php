<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact; // Supongamos que aquí tienes tu clase de correo personalizada
use Illuminate\Mail\Message;

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

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mensaje' => $request->message,
        ];


        Mail::send('emails.contact_form', $data, function (Message $message) use ($data) {
            $message->to('recipient@example.com', 'Recipient Name')
                    ->subject('Correo de contacto');
        });




        return redirect('/contact')->with('success', 'Correo enviado con éxito');
    }

} 





// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Mail\Message;

// class ContactController extends Controller
// {
//     public function showForm()
//     {
//         return view('emails.contact_form');
//     }
   


//     public function sendEmail(Request $request)
//     {
//         $request->validate([
//             'name' => 'required|string',
//             'email' => 'required|email',
//             'message' => 'required|string',
//         ]);


//         $data = [
//             'name' => $request->name,
//             'email' => $request->email,
//             'mensaje' => $request->message,
//         ];


//         Mail::send('emails.contact_form', $data, function ($message) use ($data) {
//             $message->to('recipient@example.com', 'Recipient Name')
//                 ->subject('Correo de contacto');
//         });


//         // Mail::send('emails.contact_form', $data, function (Message $message) use ($data) {
//         //     $message->to('recipient@example.com', 'Recipient Name')
//         //             ->subject('Correo de contacto');
//         // });


//         return redirect('/contact')->with('success', 'Correo enviado con éxito');
//     }
// }


