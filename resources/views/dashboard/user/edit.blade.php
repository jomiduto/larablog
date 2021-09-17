@extends('dashboard.master')

@section('content')

    {{-- @include('dashboard.partials.validation-error') --}}

    <form action="{{ route("user.update", $user->id) }}" method="POST">
        @method('PUT') {{-- Método que debe simular en este caso PUT, ver route:list para entender--}}
        @include('dashboard.user._form', ['pasw' => false])
    </form>

@endsection
