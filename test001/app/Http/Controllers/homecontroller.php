<?php

namespace App\Http\Controllers;
use App\models\cars;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class homecontroller extends Controller
{
    // public $state = false; 

    public function index(){
        // $state = false;

        // $car = cars::all()->limit(3)->where('Popular cars', '1')->get();
        $car = DB::table('cars')->where('Popular cars', '1')->limit(3)->get();
        
        $category = DB::table('categories')->get();
        
        $data = compact('car', 'category');
        
        // $ret = compact('state');
        return view('home')->with($data);
    }
}
