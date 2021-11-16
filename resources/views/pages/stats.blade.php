@extends('layouts.dashboard')

@section('stats')
    @foreach ($ankiety as $item)
        <div>{{ $item->id }} {{ $item->nazwa_ankiety }} <a href="{{ route('single_stats', $item->id) }}">Sprawdz statystyki</a></div>
    @endforeach
@endsection