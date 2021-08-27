    @csrf
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Título" value="{{ old('title', $post->title) }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="url_clean">URL limpia</label>
        <input type="text" class="form-control" name="url_clean" id="url_clean" autocomplete="off" placeholder="URL limpia" value="{{ old('url_clean', $post->url_clean) }}">
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Contenido del post">{{old('content', $post->content)}}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>