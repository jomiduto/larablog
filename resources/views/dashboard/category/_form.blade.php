@csrf
<div class="form-group">
    <label for="title">Título</label>
    <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Título" value="{{ old('title') }}">
</div>
<div class="form-group">
    <label for="url_clean">URL Limpia</label>
    <input type="text" class="form-control" name="url_clean" id="url_clean" autocomplete="off" placeholder="URL Limpia" value="{{ old('url_clean') }}">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
