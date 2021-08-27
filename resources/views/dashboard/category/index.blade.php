@extends('dashboard.master')

@section('content')
    <h1>Categorías</h1>
    <a class="btn btn-success mt-3 mb-3" href="{{ route('category.create') }}">Crear Categoría</a>
    <br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Fecha Creación</th>
                <th scope="col">Fecha Actualización</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->id }}</td>
                    <td>{{ $categorie->title }}</td>
                    <td>{{ $categorie->created_at->format('d-m-Y') }}</td>
                    <td>{{ $categorie->updated_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('category.show', $categorie->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('category.edit', $categorie->id) }}" class="btn btn-secondary">Editar</a>
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $categorie->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

    {{-- Modal para eliminar POST --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel"></h5>
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
