@extends('layouts.dashboard')

@section('single_ankieta')
     <div class="card">
          <div class="card-body">
               <h5>{{ $res->nazwa_ankiety }}</h5>
               <p>{{ $res->pytanie1 }}</p>
               {{-- //TODO: Dodaj forma dla pytan itd.. --}}
          </div>
     </div>
@endsection