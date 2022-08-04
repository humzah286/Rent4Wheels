<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carviewController extends Controller
{
    public function index($id){
        $car = DB::table('cars')->where('id', $id)->get();

        $data = compact('car');
        return view('viewcar')->with($data);
    }
}
