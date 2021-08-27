@extends('dashboard.master')

@section('content')

    {{-- @include('dashboard.partials.validation-error') --}}

    <form action="{{ route("category.update", $category->id) }}" method="POST">
        @method('PUT') {{-- Método que debe simular en este caso PUT, ver route:list para entender--}}
        @include('dashboard.category._form')
    </form>

@endsection
