<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\signup;
use App\Http\Controllers\homecontroller;

class signupController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function signup(Request $request){
        $user = new signup();

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone_no = $request['phone_no'];
        $user->password = $request['password'];
        $user->gender = $request['gender'];
        $user->save();

        session()->put('email', $user->email);
        session()->put('password', $user->password);
        session()->put('name', $user->name);

        // return [homecontroller::class, 'index'];
        return redirect('/home');
    }

    public function verify(Request $request){
        $user = signup::all();

        // $data = compact('user');

        $t = false;

        // echo "<pre>";
        // print_r($user->toArray());
        // echo "</pre>";

        // $data = $user->toArray();
        $data = compact('user');
        
        foreach ($user as $i){
            if ($i->email == $request->email && $i->password == $request->password)
            {    $t = true; 
                // echo "<script>console.log('login true!!');</script>";
                
                // $name = $i->name;
                session()->put('email', $i->email);
                session()->put('password', $i->password);
                session()->put('name', $i->name);
                // return [homecontroller::class, 'index'];
                return redirect('/home');
            }
        }
    }
}
