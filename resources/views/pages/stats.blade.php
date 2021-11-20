@extends('layouts.dashboard')

@section('stats')
<br>
<div class="container">
    <div class="row row-cols-3">
        @if (sizeof($ankiety) > 0)
            @foreach ($ankiety as $item)
            <div class="col"> 
                <div class="card">
                    <div class="card-body">
                        {{ $item->nazwa_ankiety }}
                    </div>
                    <a class="btn btn-primary" href="{{ route('single_stats', $item->id) }}">Sprawdz statystyki</a>
                    <a class="btn btn-warning" href="{{ route('get_edit_page', $item->id) }}">Edytuj ankiete</a>
                    <a class="btn btn-danger" href="{{ route('remove_ankieta', $item->id) }}">Usun ankiete</a>
                </div>
            </div>
            @endforeach
        @else
        <div class="col"></div>
            <div class="col">
                <h3 style="text-align: center">BRAK ANKIET</h3>
            </div>
        <div class="col"></div>
        @endif
       
    </div>
</div>
@endsection