@extends('layouts.dashboard')

@section('stats')
<br>
<div class="container">
    <div class="row row-cols-3">
        @foreach ($ankiety as $item)
            <div class="col"> 
                <div class="card">
                    <div class="card-body">
                        {{ $item->nazwa_ankiety }}
                    </div>
                    <a class="btn btn-primary" href="{{ route('single_stats', $item->id) }}">Sprawdz statystyki</a>
                    <a class="btn btn-danger" href="{{ route('remove_ankieta', $item->id) }}">Usun ankiete</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection