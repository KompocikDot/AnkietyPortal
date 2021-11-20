<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @auth
     <title>DASHBOARD {{ strtoupper(Auth::user()->name) }}</title>
     @endauth

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
               <a class="navbar-brand" href="{{ route('dashboard') }}">DASHBOARD ANKIETY PE-EL</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    @auth
                         @if ($ifAdmin)
                              <li class="nav-item">
                                   <a class="nav-link" href="{{ route('ankiety_get') }}">DODAJ ANKIETE</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="{{ route('all_stats') }}">STATYSTYKI</a>
                              </li>
                         @else
                              <li class="nav-item">
                                   <a class="nav-link" href="{{ route('answers') }}">TWOJE ODPOWIEDZI</a>
                              </li>
                         @endif
                    
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   {{ strtoupper(Auth::user()->name) }}
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <li><a class="dropdown-item" href="{{ route('profile.show') }}">PROFIL</a></li>
                                   <li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                             @csrf
                                             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">WYLOGUJ</a>
                                        </form>
                                   </li>
                                
                              </ul>
                            </li>
                    @endauth
                    </ul>
                    
               </div>
          </div>
     </nav>

     @auth
          @if ($ifAdmin)
               @yield('ankieta_add')
               @yield('admin_content')
               @yield('stats')
               @yield('single_stat')
               @yield('editpage')
          @else
               @yield('single_ankieta')
               @yield('user_content')
               @yield('answers')
               @yield('single_answer')
          @endif
     @endauth

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>