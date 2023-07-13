 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MessagesController extends Controller
{
    //


public function store(){
    request()->validate([
'name' => 'required',
'email' => 'required | email',
'subject' => 'required',
'content'=>'required|min:3'
    ],[
        'name.required'=> __('I need your name')
]);

Mail :: to('aingivon@gmail.com')->send();

return 'Mensaje enviado';

}
}

// public function index()
// // {
// //     return view('nombre-de-la-vista');
// // }