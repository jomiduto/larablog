@extends('dashboard.master')

@section('content')
    @csrf
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Título" value="{{ $post->title }}" readonly>
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="url_clean">URL limpia</label>
        <input type="text" class="form-control" name="url_clean" id="url_clean" autocomplete="off" placeholder="URL limpia" value="{{ $post->url_clean }}" readonly>
    </div>
    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Contenido del post" readonly>{{ $post->content }}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
@endsection
