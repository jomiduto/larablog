<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}"> <!-- Se realiza el enlace con la carpeta public/css/app.css -->
    <script src="{{ asset("js/app.js") }}"></script> <!-- Se realiza el enlace con la carpeta public/js/app.js -->
</head>
<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Crear Post</h1>
        <br>
        <form action="{{ route("post.store") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Título">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_clean">URL limpia</label>
                <input type="text" class="form-control" name="url_clean" id="url_clean" autocomplete="off" placeholder="URL limpia">
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea class="form-control" name="content" id="contenido" rows="3" placeholder="Contenido del post"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
