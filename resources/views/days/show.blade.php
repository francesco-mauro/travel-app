@extends('layouts.layout')

@section('title', 'Dettagli Giornata')

@section('content')
    <h1>Giornata del {{ $day->date }}</h1>

    <h2>Tappe</h2>
    <ul>
        @foreach($day->stops as $stop)
            <li>
                <strong>{{ $stop->title }}</strong>
                <p>{{ $stop->description }}</p>
                <span>Valutazione: {{ $stop->rating }}/5</span>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('stops.create', $day->id) }}" class="btn btn-primary">Aggiungi Tappa</a>
@endsection
