@extends('layouts.dashboard')


@section('user_content')
    <div>Witaj w panelu użytkownika <br> dostępne ankiety:</div>
    
    @foreach ($res[0] as $item)
        <div class="card">
            <div class="card-body">
                {{ $item->nazwa_ankiety }}
            </div>
            <button type="button" class="btn btn-primary"><a style="color: white" href="{{ route('ankiety_one', $item->id) }}">Sprawdź</a></button>
        </div><br>
    @endforeach
@endsection