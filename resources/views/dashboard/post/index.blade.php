@extends('dashboard.master')

@section('content')
    <h1>Publicacaciones</h1>
    <a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">Crear Post</a>
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Publicado</th>
                <th scope="col">Fecha Creación</th>
                <th scope="col">Fecha Actualización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->title }}</td>
                    <td>{{ $p->posted }}</td>
                    <td>{{ $p->created_at->format('d-m-Y') }}</td>
                    <td>{{ $p->updated_at->format('d-m-Y') }}</td>
                    <td>Vacío</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection