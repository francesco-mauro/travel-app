@extends('layouts.layout')

@section('title', 'I miei Viaggi')

@section('content')
    <h1>I miei Viaggi</h1>
    <ul>
        @foreach($trips as $trip)
            <li>
                <a href="{{ route('trips.show', $trip->id) }}">{{ $trip->title }}</a>
                <span>{{ $trip->start_date }} - {{ $trip->end_date }}</span>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('trips.create') }}" class="btn btn-primary">Crea Nuovo Viaggio</a>
@endsection
