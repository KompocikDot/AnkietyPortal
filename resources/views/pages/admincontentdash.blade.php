@extends('layouts.dashboard')

@section('admin_content')
<br>
    <div class="container">
         <div class="row">
              <div class="col" style="text-align: center">
                   <b>WITAJ W PANELU ADMINISTRATORA</b>
              </div>
         </div>
          <div class="row">
               <div class="col">
                    <div class="card">
                         <div class="card-body">
                              <button>DODAJ TEST</button>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="card">
                         <div class="card-body">
                              <button>SPRAWDZ STATYSTYKI</button>
                         </div>
                    </div>
               </div>
          </div>
    </div>
@endsection