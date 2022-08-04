<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\contact
use App\models\contact;


class contactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function contact1(Request $request){
        $contact = new contact();

        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->message = $request['message'];
        $contact->subject = $request['subject'];
        $contact->send();

        return redirect('/home');
    }
}
