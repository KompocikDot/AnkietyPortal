@extends('layouts.dashboard')


@section('user_content')
<br>
<div class="container">
    <div class="row">
        <div class="col" style="text-align: center">
            Witaj w panelu użytkownika, dostępne ankiety:
        </div>
        
    </div>
    <br>
    @if (sizeof($unresolved) != 0)
        @foreach ($unresolved as $item)
            <div class="card">
                <div class="card-body">
                    {{ $item->nazwa_ankiety }}
                </div>
                <a class="btn btn-primary"href="{{ route('ankiety_one', $item->id) }}">Sprawdź</a>
            </div><br>
        @endforeach
    @else
        <div class="row">
            <div class="col" style="text-align: center">
                NIE ZNALEZIONO DOSTEPNYCH ANKIET
            </div>
        </div>
    @endif
</div>
@endsection