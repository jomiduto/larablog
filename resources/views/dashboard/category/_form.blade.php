@csrf
<div class="form-group">
    <label for="title">Título</label>
    <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Título" value="{{ old('title', $category->title) }}">
    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="url_clean">URL Limpia</label>
    <input type="text" class="form-control" name="url_clean" id="url_clean" autocomplete="off" placeholder="URL Limpia" value="{{ old('url_clean', $category->url_clean) }}">
    @error('url_clean')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
