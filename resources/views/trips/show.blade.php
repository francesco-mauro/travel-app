@extends('layouts.layout')

@section('title', 'Dettagli Viaggio')

@section('content')
    <h1>{{ $trip->title }}</h1>
    <p>Periodo: {{ $trip->start_date }} - {{ $trip->end_date }}</p>

    <h2>Giornate</h2>
    <ul>
        @foreach($trip->days as $day)
            <li>
                <a href="{{ route('days.show', $day->id) }}">{{ $day->date }}</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('days.create', $trip->id) }}" class="btn btn-primary">Aggiungi Giornata</a>
@endsection
