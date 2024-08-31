<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function create($id)
    {
        $trip = Trip::findOrFail($id);
        return view('days.create', ['trip' => $trip]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $trip = Trip::findOrFail($id);
        $trip->days()->create($request->all());

        return redirect()->route('trips.show', $trip->id)->with('success', 'Giornata aggiunta con successo!');
    }
}
