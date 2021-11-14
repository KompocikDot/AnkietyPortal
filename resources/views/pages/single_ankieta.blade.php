@extends('layouts.dashboard')

@section('single_ankieta')
     <div class="card">
          <div class="card-body">
               <h5>{{ $res->nazwa_ankiety }}</h5>
               <form action="{{ route('add_answer') }}" method="post">
                    @for ($i = 1; $i <= 6 ; $i++)
                         @php
                         $pyt = "pytanie".$i;
                         @endphp
                         <h6>{{ $res->$pyt }}</h6>
                         <select name="odp{{ $i }}" required>
                              <option value="A" selected>Odpowiedz A</option>
                              <option value="B">Odpowiedz B</option>
                              <option value="C">Odpowiedz C</option>
                              <option value="D">Odpowiedz D</option>
                         </select>
                         <br>
                    @endfor
                    <button type="submit">Zapisz odpowiedzi</button>
               </form>
          </div>
     </div>
@endsection