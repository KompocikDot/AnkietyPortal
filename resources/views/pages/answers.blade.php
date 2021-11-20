@extends('layouts.dashboard')

@section('answers')
     <br>
    <div class="container">
         <div class="row">
          @if (sizeof($answers) == 0) 
               <div class="col" style="text-align: center">
                    <h3>BRAK ODPOWIEDZI</h3>
               </div>
          @endif
          @foreach ($answers as $item)
               <div class="col">
                    <div class="card">
                         <div class="card-body">
                              {{$item->nazwa_ankiety}}
                         </div>
                         <a class="btn btn-primary" href="{{ route('single_answer', $item->id) }}">SPRAWDZ SWOJE ODPOWIEDZI</a>
                    </div>
               </div>
          </div>
          <br>
          @endforeach
    </div>
@endsection