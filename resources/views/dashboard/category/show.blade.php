@extends('dashboard.master')

@section('content')
    @csrf
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" name="title" id="title" autocomplete="off" placeholder="Título" value="{{ $category->title }}" readonly>
    </div>
    <div class="form-group">
        <label for="url_clean">URL limpia</label>
        <input type="text" class="form-control" name="url_clean" id="url_clean" autocomplete="off" placeholder="URL limpia" value="{{ $category->url_clean }}" readonly>
    </div>
@endsection
