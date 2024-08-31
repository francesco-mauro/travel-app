<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Stop;
use Illuminate\Http\Request;

class StopController extends Controller
{
    public function create($id)
    {
        $day = Day::findOrFail($id);
        return view('stops.create', ['day' => $day]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|string',
            'location' => 'required|json',
            'notes' => 'nullable|string',
            'rating' => 'required|integer|min=0|max=5',
        ]);

        $day = Day::findOrFail($id);
        $day->stops()->create($request->all());

        return redirect()->route('days.show', $day->id)->with('success', 'Tappa aggiunta con successo!');
    }
}
