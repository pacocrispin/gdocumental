@extends('layouts.main', ['activePage' => 'trabajadores', 'titlePage' => 'Trabajadores'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Trabajadores</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                @can('trabajadore_create')
                <a href="{{ route('trabajadores.create') }}" class="btn btn-sm btn-facebook">Añadir nuevo trabajador</a>
                @endcan
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Código </th>
                  <th> Cedula </th>
                  <th> Nombre </th>
                  <th> Foto </th>
                  <th> Cargo </th>
                  <th> Departamento </th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($trabajadores as $trabajadore)
                  <tr>
                    <td>{{ $trabajadore->id }}</td>
                    <td>{{ $trabajadore->codigo }}</td>
                    <td>{{ $trabajadore->cedula }}</td>
                    <td>{{ $trabajadore->nombre }}</td>
                    <td>
                      <img class="avatar" width="20px" src="{{ asset('/image')}}/{{$trabajadore->foto}}">
                    </td>
                    <td>{{ $trabajadore->cargo->nombre}}</td>
                    <td>{{ $trabajadore->departamento->nombre}}</td>
                    <td class="td-actions text-right">
                    @can('trabajadore_show')
                      <a href="{{ route('trabajadores.show', $trabajadore->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                    @endcan
                    @can('trabajadore_edit')
                      <a href="{{ route('trabajadores.edit', $trabajadore->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    @endcan
                    @can('trabajadore_destroy')
                      <form action="{{ route('trabajadores.destroy', $trabajadore->id) }}" method="post"
                        onsubmit="return confirm('Esta Seguro')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    @endcan
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $trabajadores->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
