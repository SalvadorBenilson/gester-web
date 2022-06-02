<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gester</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}">
</head>

<body class="bg-white">

<!--DIV DA NAV MENU-->
 <nav class="navbar navbar-expand bg-light" aria-label="Third navbar example">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('/img/briefcase-fill.svg') }}" alt="Bootstrap" width="25" height="25" class="d-inline-block align-text-top">
      GESTER
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        </ul>
        @if (Route::has('login'))
        <div class="text-end">
        @auth
        <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-outline-light me-2">Dashboard</button></a>
        @else
        <a class="text-decoration-none text-end" href="{{ url('/login') }}">
            <img src="{{ asset('/img/lock-fill.svg') }}" alt="Bootstrap" width="25" height="25">
        </a>
        @if (Route::has('register'))
        <a href="{{ url('/register') }}"><button type="button" class="btn btn-outline-dark me-2 text-sm">Criar conta</button></a>  
        @endif

        @endauth
        </div>
        @endif
      </div>
    </div>
  </nav>
  <!--FIM DA NAV MENU-->      

    {{ $slot }}

        <!-- Scripts -->
        <script src="{{ URL::asset('js/bootstrap.bundle.js') }}" ></script>
    </body>
</html>
