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

         @for ($i = 1; $i <= 6; $i++ )
         @php
               $pytansko = "pytanie".$i;
               $odp = "p".$i."_odp";
               $odp_ = "odp".$i;
               $odp_abcd = $answer[0]->$odp_;
               $odp = explode("||", $answer[0]->$odp);
               $finalna;
               switch ($odp_) {
                    case 'A':
                         $finalna = $odp[0];
                         break;
                    case 'B':
                         $finalna = $odp[1];
                         break;
                    case 'C':
                         $finalna = $odp[2];
                       break;
                    default:
                         $finalna = $odp[3];
                         break;
             }
         @endphp

         <div class="row">
               <div class="col">
                    <div class="card">
                         <div class="card-body">
                              Pytanie 1: {{ $answer[0]->$pytansko }}
                              Twoja odpowiedź: {{ $odp_abcd }}: {{ $finalna }}<br>

                         </div>
                    </div>
               </div>
          </div>
          <br>
          @endfor
             
    </div>
@endsection