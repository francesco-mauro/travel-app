
@extends('layouts.layout')

@section('title', 'Aggiungi Tappa')

@section('content')
    <h1>Aggiungi Tappa per {{ $day->date }}</h1>

    <form action="{{ route('stops.store', $day->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="image_url">URL Immagine</label>
            <input type="text" id="image_url" name="image_url" class="form-control">
        </div>
        <div class="form-group">
            <label for="location">Posizione (JSON)</label>
            <input type="text" id="location" name="location" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="notes">Note</label>
            <textarea id="notes" name="notes" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="rating">Valutazione</label>
            <input type="number" id="rating" name="rating" class="form-control" min="0" max="5" required>
        </div>
        <button type="submit" class="btn btn-primary">Salva Tappa</button>
    </form>
@endsection
