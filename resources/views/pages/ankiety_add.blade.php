@extends('layouts.dashboard')



@section('ankieta_add')
     <br>

     @for ($i = 1; $i <= 6; $i++)
     @if ($i == 1)
          <form action="{{ route('ankiety_add') }}" method="POST">
          @csrf 
     @endif

     <div class="card">
          <div class="card-header">
          Pytanie {{ $i }}
          </div>
          <div class="card-body">
                    <div class="mb-3">
                         <label for="validationCustom01" class="form-label">Tresc pytania:</label>
                         <input type="text" class="form-control" name="pytanie{{$i}}" required>
                    </div>
                    <div class="mb-3">
                         <label for="validationCustom01" class="form-label">Treść odpowiedzi A:</label>
                         <input type="text" class="form-control" name="odp_a_{{$i}}" required>
                    </div>
                    <div class="mb-3">
                         <label for="validationCustom01" class="form-label">Treść odpowiedzi B:</label>
                         <input type="text" class="form-control" name="odp_b_{{$i}}" required>
                    </div>
                    <div class="mb-3">
                         <label for="validationCustom01" class="form-label">Treść odpowiedzi C:</label>
                         <input type="text" class="form-control" name="odp_c_{{$i}}" required>
                    </div>
                    <div class="mb-3">
                         <label for="validationCustom01" class="form-label">Treść odpowiedzi D:</label>
                         <input type="text" class="form-control" name="odp_d_{{$i}}" required>
                    </div>
                    <div class="mb-3">
                         <label for="validationCustom01" class="form-label">Poprawna odpowiedz:</label>
                         <select class="form-select" name="poprawna_{{$i}}">
                              <option selected value="a">Odpowiedz A</option>
                              <option value="b">Odpowiedz B</option>
                              <option value="c">Odpowiedz C</option>
                              <option value="d">Odpowiedz D</option>
                         </select>
                    </div>
          </div>
     </div>
     <br>

     @if ($i == 6)
          <button type="submit" class="btn btn-primary">Dodaj ankiete</button>
          </form>
     @endif
     @endfor

@endsection