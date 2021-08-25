@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route("post.update", $post->id) }}" method="POST">
        @method('PUT') {{-- Método que debe simular en este caso PUT, ver route:list para entender--}}
        @include('dashboard.post._form')
    </form>

@endsection
