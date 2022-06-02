<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        @livewireStyles
        
</head>
<body>
    
<!--NAV BAR-->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{ url('/admin') }}">
    <img src="{{ asset('/img/briefcase-fill.svg') }}" alt="Bootstrap" width="25" height="25" class="d-inline-block align-text-top">
    GESTER
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link" href="{{ url('/admin') }}">
      <img src="{{ asset('/img/activity.svg') }}" alt="Bootstrap" width="20" height="20">
          DASHBOARD
        </a>
        <a class="nav-link" href="{{ url('/publicador') }}">
        <img src="{{ asset('/img/person-fill.svg') }}" alt="Bootstrap" width="20" height="20">
            Publicador
        </a>
        <a class="nav-link" href="{{ url('/grupo') }}">
        <img src="{{ asset('/img/house-fill.svg') }}" alt="Bootstrap" width="20" height="20">
            Grupo
        </a>
        <a class="nav-link" href="{{ url('/territorio') }}">
        <img src="{{ asset('/img/map-fill.svg') }}" alt="Bootstrap" width="20" height="20">
            Território
        </a>
    </div>
    </div>
  </div>
</nav>
<!--FIM DA NAV BAR-->

<!--Slot content -->
<div class="container-fluid">
{{ $slot }}
</div>


@livewireScripts
<!-- Scripts -->
    <script defer src="https://unpkg.com/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    <script src="{{ URL::asset('js/bootstrap.bundle.js') }}" defer></script>
</body>
</html>
