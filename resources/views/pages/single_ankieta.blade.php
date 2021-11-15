@extends('layouts.dashboard')

@section('single_ankieta')
     <div class="card">
          <div class="card-body">
               <h5>{{ $res->nazwa_ankiety }}</h5>
               <form action="{{ route('add_answer') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ankieta_id" value={{ $res->id }}>
                    @for ($i = 1; $i <= 6 ; $i++)
                         @php
                         $pyt = "pytanie".$i;
                         $odpowiedzi = "p".$i."_odp";
                         $odp_arr = explode("||", $res->$odpowiedzi);
                         @endphp
                         <h6>{{ $res->$pyt }}</h6>
                         <select name="odp{{ $i }}" required>
                              <option value="A" selected>Odpowiedz A: {{ $odp_arr[0] }}</option>
                              <option value="B">Odpowiedz B: {{ $odp_arr[1] }}</option>
                              <option value="C">Odpowiedz C: {{ $odp_arr[2] }}</option>
                              <option value="D">Odpowiedz D: {{ $odp_arr[3] }}</option>
                         </select>
                         <br>
                    @endfor
                    <input type="submit" value="Zapisz odpowiedzi"></button>
               </form>
          </div>
     </div>
@endsection