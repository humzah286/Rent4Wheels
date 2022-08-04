<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\checkout;

class checkoutController extends Controller
{
    public function index($id){
        if (session()->has('email')){
            $car = DB::table('cars')->where('id', $id)->get();
            $user = DB::table('users')->where('email', session()->get('email'))->get();
            if ($car[0]->available == 0){
                return redirect()->back()->with('alert', 'Car currently not available!!');
            }
            $data = compact('car', 'user');
            return view('checkout')->with($data);
        }
        else {
            return redirect('/login')->with('alert', 'please login first!!!');
        }
    }

    public function checkout(Request $request){
        $entry = new checkout();

        $entry->firstname = $request['firstname'];
        $entry->lastname = $request['lastname'];
        $entry->company_name = $request['company_name'];
        $entry->address = $request['address'];
        $entry->email = $request['email'];
        $entry->phone_no = $request['phone_no'];
        $entry->name_on_card = $request['name_on_card'];
        $entry->credit_card_no = $request['credit_card_no'];
        $entry->Expiration = $request['Expiration'];
        $entry->CVV = $request['CVV'];
        $entry->total = $request['total'];
        $entry->car_id = $request['car_id'];
        $entry->start_date = $request['start_date'];
        $entry->end_date = $request['end_date'];
        $entry->save();

        return redirect()->back()->with('alert', 'your request has been recieved!! you will recieve an email confirming your order!!');
    }
}
