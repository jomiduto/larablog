@extends('dashboard.master')

@section('content')
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="Nombre" value="{{ $user->name }}" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" autocomplete="off" placeholder="Email" value="{{ $user->email }}" readonly>
    </div>
@endsection
