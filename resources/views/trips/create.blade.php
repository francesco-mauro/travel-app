@extends('layouts.layout')

@section('title', 'Crea Nuovo Viaggio')

@section('content')
    <h1>Crea Nuovo Viaggio</h1>
    
    <form action="{{ route('trips.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="start_date">Data di Inizio</label>
            <input type="date" id="start_date" name="start_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_date">Data di Fine</label>
            <input type="date" id="end_date" name="end_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salva Viaggio</button>
    </form>
@endsection
