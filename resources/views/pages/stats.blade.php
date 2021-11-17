@extends('layouts.dashboard')

@section('stats')
<br>
<div class="container">
    <div class="row row-cols-3">
        @foreach ($ankiety as $item)
            <div class="col"> 
                <div class="card">
                    <div class="card-body">
                        {{ $item->nazwa_ankiety }} <a class="btn btn-info" href="{{ route('single_stats', $item->id) }}">Sprawdz statystyki</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection