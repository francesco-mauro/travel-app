<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    
    public function create()
    {
        return view('trips.create');  
    }
}