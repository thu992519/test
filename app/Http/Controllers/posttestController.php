<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posttest;
class posttestController extends Controller
{
    
    public function add(){
        $flight = new posttest ;
        $flight->name="coke";
        $flight->code="123";
        $flight->save();

        $flights = posttest::get();
        return view('flight', [
        'flights'=>$flights
        ]);

        
    }
    
}
