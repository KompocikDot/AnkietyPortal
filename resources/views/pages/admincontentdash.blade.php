@extends('layouts.dashboard')

@section('admin_content')
<br>
    <div class="container">
          <div class="row">
               <div class="col " style="text-align: center">
                    <b>WITAJ W PANELU ADMINISTRATORA</b>
               </div>
          </div>
          <br>
          <div class="row">
               <div class="col">
                    <div class="card">
                         <div class="card-body">
                              <a class="btn btn-primary stretched-link" style="width: 100%" href="{{ route('ankiety_add') }}">DODAJ TEST</a>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="card">
                         <div class="card-body">
                              <a class="btn btn-primary stretched-link"  style="width: 100%" href="{{ route('all_stats') }}">SPRAWDZ STATYSTYKI</a>
                         </div>
                    </div>
               </div>
          </div>
    </div>
@endsection