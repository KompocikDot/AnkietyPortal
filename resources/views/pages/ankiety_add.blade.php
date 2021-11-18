@extends('layouts.dashboard')



@section('ankieta_add')
     <br>
     <form action="{{ route('ankiety_add') }}" method="POST">
          @csrf 
          <div class="container">
          <div class="card">
               <div class="card-body">
                    <div class="mb-3">
                         <label for="validationCustom01" class="form-label">Tytuł ankiety</label>
                         <input type="text" class="form-control" name="nazwa_ankiety" required>
                    </div>
               </div>
          </div>
          
          <br>
          @for ($i = 1; $i <= 6; $i++)
               {{-- @if ($i == 1 || $i == 3 || $i == 5)
                    <div class="row">
               @endif --}}
               <div class="row">
                    <div class="col">
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
                              </div>
                         </div>
                         <br>
                    </div>
               </div>
               @endfor
               <div class="row">
                    <div class="col">
                         <button type="submit" class="btn btn-primary btn-block btn-lg" style="width:100%">Dodaj ankiete</button>
                    </div>
               </div>
          </div>
          </form>
     </div>        
@endsection