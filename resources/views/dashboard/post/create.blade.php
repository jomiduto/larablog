<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creación</title>
</head>
<body>
    <form action="{{ route("post.store") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Título">
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
</body>
</html>
