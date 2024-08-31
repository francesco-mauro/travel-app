@extends('layouts.layout')

@section('title', 'Aggiungi Giornata')

@section('content')
    <h1>Aggiungi Giornata per {{ $trip->title }}</h1>

    <form action="{{ route('days.store', $trip->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salva Giornata</button>
    </form>
@endsection