@extends('layouts.dashboard')

@section('single_answer')
<br>
    <div class="container">
         <div class="row">
              <div class="col">
                   <div class="card">
                        <div class="card-body">
                             <h4>ANKIETA: {{$answer[0]->nazwa_ankiety}}</h4>
                        </div>
                   </div>
              </div>
         </div>
         <br>

         @foreach ($answer as $item)
         <div class="row">
               <div class="col">
                    <div class="card">
                         <div class="card-body">
                              Pytanie 1: {{ $item->pytanie1 }} Twoja odpowiedź: {{ $item->odp1 }}<br>
                              {{ $item->pytanie2 }} {{ $item->odp2 }}
                              {{ $item->pytanie3 }} {{ $item->odp3 }}
                              {{ $item->pytanie4 }} {{ $item->odp4 }}
                              {{ $item->pytanie5 }} {{ $item->odp5 }}
                              {{ $item->pytanie6 }} {{ $item->odp6 }}
                         </div>
                    </div>
               </div>
          </div>
          <br>
          @endforeach
             
    </div>
@endsection