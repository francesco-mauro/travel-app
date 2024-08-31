<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    
    public function create()
    {
        return view('trips.create');
    }

   
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

       
        Trip::create($validatedData);

       
        return redirect()->route('home')->with('success', 'Viaggio creato con successo!');
    }
}
