@extends('dashboard.master')

@section('content')

    @include('dashboard.partials.validation-error')

    <form action="{{ route("post.store") }}" method="POST">
        @include('dashboard.post._form') {{-- Inclusión de la vista del formulario _form.blade.php --}}
    </form>

@endsection
