<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Módulo Administrador</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}"> <!-- Se realiza el enlace con la carpeta public/css/app.css -->
    <script src="{{ asset("js/app.js") }}"></script> <!-- Se realiza el enlace con la carpeta public/js/app.js -->
</head>
<body>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
