@extends('dashboard.master')

@section('content')
    <h1>Publicaciones</h1>
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
                    <td>
                        <a href="{{ route('post.show', $p->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('post.edit', $p->id) }}" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $p->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

    {{-- Modal para eliminar POST --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">New message</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Seguro que desea borrar el registro seleccionado?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <form id="formDelete" method="POST" action="{{ route('post.destroy', 0) }}" data-action="{{ route('post.destroy', 0) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            </div>
          </div>
        </div>
      </div>

      <script>
        //   Lógica para eliminar un Post
        var exampleModal = document.getElementById('deleteModal')

        exampleModal.addEventListener('show.bs.modal', function (event) {

            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-id')
            var action = $('#formDelete').attr('data-action').slice(0, -1)
            action += recipient
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInput = exampleModal.querySelector('.modal-body input')

            console.log(action)
            $('#formDelete').attr('action', action)

            modalTitle.textContent = 'Eliminar Post: ' + recipient
            //modalBodyInput.value = recipient
        })
      </script>
@endsection
