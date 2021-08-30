@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route("post.update", $post->id) }}" method="POST">
        @method('PUT') {{-- Método que debe simular en este caso PUT, ver route:list para entender--}}
        @include('dashboard.post._form')
    </form>
    <br>
    {{-- Formulario para cargar una imagen al POST --}}
    <form action="{{ route("post.image", $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Cargar Imagen">
            </div>
        </div>
    </form>

@endsection
