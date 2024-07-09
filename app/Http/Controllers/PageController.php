<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class PageController extends Controller{
    public function index(){
    $cars = Cars::all();
    return view('welcome')->with([
        'cars'  => $cars,
    ]);

    
    }
  
}
