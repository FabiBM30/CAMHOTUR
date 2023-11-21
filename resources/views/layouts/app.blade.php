

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- ... (otros metatags y enlaces de estilo) ... -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <!-- Styles -->
    <style>
        .navbar-custom {
            background-color: #a4cc9a; /* Puedes ajustar el color cambiando el valor hexadecimal */
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Contenido que deseas mostrar en el navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom" style="height: 90px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/LOGOCAMHOTUR__1_-removebg-preview.png') }}" alt="C A M H O T U R" width="170" height="175">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Elementos del navbar que se muestran siempre -->

                        @auth

                        
{{-- <li class="nav-item">
    <a class="nav-link" href="/distritos" style="color: #124b11;"><strong>Distritos</strong></a>
</li>      --}}


<li class="nav-item">
    <a class="nav-link" href="/emprendimientos" style="color: #124b11;"><strong>Emprendimientos</strong></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/catalogos" style="color: #124b11;"><strong>Catálogos</strong></a>
</li>
@endauth

                        <!-- Resto de elementos del navbar que deseas mostrar siempre -->
                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color: #124b11;"><strong>Tipos de Emprendimiento y Catálogos</strong></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('filtrar-emprendimientos', 'Productos') }}">Productos</a></li>
            <li><a class="dropdown-item" href="{{ route('filtrar-emprendimientos', 'Servicios') }}">Servicios</a></li>
            <li><a class="dropdown-item" href="{{ route('filtrar-emprendimientos', 'Turismo') }}">Turismo</a></li>            
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"></a></li>
          </ul>
      </li>
                    </ul>
                </div>
            </div>

            @auth
    <!-- Mostrar elementos cuando el usuario está autenticado -->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" v-pre>
                <b>{{ Auth::user()->name }}</b>
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <b>{{ __('Salir') }}</b>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
@endauth

@guest
    <!-- Mostrar elementos cuando el usuario no está autenticado -->
    <ul class="navbar-nav ms-auto">
        <!-- Aquí puedes incluir enlaces o elementos para usuarios no autenticados -->

        <div style="text-align: center; padding: 10px;">
    <a href="{{ route('login') }}" style="color: #124b11;"><strong>Iniciar Sesión</strong></a>
</div>
    </ul>
@endguest


        </nav>

        <!-- Resto del contenido que se mostrará sin importar la autenticación -->
        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
    
    <!-- Scripts ... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
