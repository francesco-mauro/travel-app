<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Models\Trip;
use App\Models\Day;

// form di creazione di un nuovo viaggio
Route::get('/trips/create', [TripController::class, 'create'])->name('trips.create');
// invio del form di creazione di un nuovo viaggio
Route::post('/trips', [TripController::class, 'store'])->name('trips.store');

// aggiungere giornate di viaggio
Route::get('/trips/{id}/days/create', [App\Http\Controllers\DayController::class, 'create'])->name('days.create');
Route::post('/trips/{id}/days', [App\Http\Controllers\DayController::class, 'store'])->name('days.store');

// aggiungi tappa viaggio
Route::get('/days/{id}/stops/create', [App\Http\Controllers\StopController::class, 'create'])->name('stops.create');
Route::post('/days/{id}/stops', [App\Http\Controllers\StopController::class, 'store'])->name('stops.store');


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
