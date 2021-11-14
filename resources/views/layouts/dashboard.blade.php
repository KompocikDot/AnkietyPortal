<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @auth
     <title>Dashboard {{ Auth::user()->name }}</title>
     @endauth

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
               <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    @auth
                         @if ($ifAdmin)
                              <li class="nav-item">
                                   <a class="nav-link" href="{{ route('ankiety_get') }}">Dodaj Ankiete</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="#">Statystyki</a>
                              </li>
                         @else
                              <li class="nav-item">
                                   <a class="nav-link" href="#">Twoje odpowiedzi</a>
                              </li>
                         @endif
                    
                         <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   {{Auth::user()->name}}
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profil</a></li>
                                   <li>
                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                             @csrf
                                             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">Wyloguj</a>
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
          @else
               @yield('single_ankieta')
               @yield('user_content')
          @endif
     @endauth

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>