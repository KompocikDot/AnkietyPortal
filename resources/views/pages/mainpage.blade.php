@extends('layouts.welcome')

@section('maincontent')
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col" style="text-align: center; font-size: 40px">
                <b>Witaj w najpopularniejszym portalu z ankietami!</b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary btn-lg" href="{{ @route('register') }}" style="padding: 4em; width: 100%">DOŁĄCZ DO NAS</a>
            </div>
        </div>
        <br>
        <div class="row" style="text-align: center">
            <div class="col">
                <h3>DOSTĘPNE <b>{{$ankieties_count}}</b> ANKIETY!</h3>
            </div>
            <div class="col">
                <h3>JEST <b>{{$users_count}}</b> JUZ UŻYTKOWNIKÓW Z NAMI!</h3>
            </div>
        </div>
    </div>
@endsection