@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- Sentencia en blade para ver los datos de sesión --}}
                    {{-- {{ $user = auth()->user()->name }} --}}

                    {{-- Para ver los detalles de lo que trae la tabla rol medinate la relación con la tabla usuarios --}}
                    {{ $user = auth()->user()->rol }}

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
