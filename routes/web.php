<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Models\Trip;
use App\Models\Day;

// Rotta per visualizzare il form di creazione di un nuovo viaggio
Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');

// Home Page 
Route::get('/', function () {
    $trips = Trip::all();
    return view('home', ['trips' => $trips]);
})->name('home');

// Pagina Dettagli Viaggio 
Route::get('/trips/{id}', function ($id) {
    $trip = Trip::with('days')->findOrFail($id);
    return view('trips.show', ['trip' => $trip]);
})->name('trips.show');

// Pagina Dettagli Giornata 
Route::get('/days/{id}', function ($id) {
    $day = Day::with('stops')->findOrFail($id);
    return view('days.show', ['day' => $day]);
})->name('days.show');
