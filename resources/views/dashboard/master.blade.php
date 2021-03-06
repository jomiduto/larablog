<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Módulo Administrador</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}"> <!-- Se realiza el enlace con la carpeta public/css/app.css -->
</head>
<body>
    @include('dashboard.partials.nav-header-main')

    <div class="container">
        @include('dashboard.partials.session-flash-status')
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="{{ asset("js/app.js") }}"></script> <!-- Se realiza el enlace con la carpeta public/js/app.js -->
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
</body>
</html>
