
<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;

 use App\Mail\ContactMail;
use Mail;

class HomeController extends Controller
{
    public function contact_email_send(Request $request)
    {
        Mail::to('aingivon@gmail.com')->send(new ContactMail($request));

        return redirect('contact');
    }
}
