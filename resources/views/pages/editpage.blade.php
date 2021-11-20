@extends('layouts.dashboard')

@section('editpage')
<br>
<form action="{{ route('edit_ankieta', $res[0]->id) }}" method="POST">
     @csrf 
     <div class="container">
     <div class="card">
          <div class="card-body">
               <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Tytuł ankiety</label>
                    <input type="text" class="form-control" name="nazwa_ankiety" value="{{ $res[0]->nazwa_ankiety }}" required>
               </div>
          </div>
     </div>
     
     <br>
     @for ($i = 1; $i <= 6; $i++)
     @php
          $p = "pytanie".$i;
          $odp = "p".$i."_odp";
          $answers = explode('||', $res[0]->$odp);
     @endphp

          <div class="row">
               <div class="col">
                    <div class="card">
                         <div class="card-header">
                              Pytanie {{ $i }}
                         </div>
                         <div class="card-body">
                              <div class="mb-3">
                                   <label for="validationCustom01" class="form-label">Tresc pytania:</label>
                                   <input type="text" class="form-control" name="pytanie{{$i}}" value="{{ $res[0]->pytanie1 }}" required>
                              </div>
                              <div class="mb-3">
                                   <label for="validationCustom01" class="form-label">Treść odpowiedzi A:</label>
                                   <input type="text" class="form-control" name="odp_a_{{$i}}" value="{{ $answers[0] }}" required>
                              </div>
                              <div class="mb-3">
                                   <label for="validationCustom01" class="form-label">Treść odpowiedzi B:</label>
                                   <input type="text" class="form-control" name="odp_b_{{$i}}" value="{{ $answers[1] }}" required>
                              </div>
                              <div class="mb-3">
                                   <label for="validationCustom01" class="form-label">Treść odpowiedzi C:</label>
                                   <input type="text" class="form-control" name="odp_c_{{$i}}" value="{{ $answers[2] }}" required>
                              </div>
                              <div class="mb-3">
                                   <label for="validationCustom01" class="form-label">Treść odpowiedzi D:</label>
                                   <input type="text" class="form-control" name="odp_d_{{$i}}" value="{{ $answers[3] }}" required>
                              </div>
                         </div>
                    </div>
                    <br>
               </div>
          </div>
          @endfor
          <div class="row">
               <div class="col">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" style="width:100%">Edytuj ankiete</button>
               </div>
          </div>
          <br>
     </div>
     </form>
</div>        
@endsection