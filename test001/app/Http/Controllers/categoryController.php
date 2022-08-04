<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function index($name){
        $car = DB::table('cars')->where('Category', $name)->get();
        $data = compact('car');

        return view('categories')->with($data);
    }

    public function popular(){
        $car = DB::table('cars')->where('Popular cars', 1)->get();
        $data = compact('car');

        return view('categories')->with($data);
    }
}
