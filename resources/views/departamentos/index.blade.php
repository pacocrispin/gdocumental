@extends('layouts.main', ['activePage' => 'departamentos', 'titlePage' => 'Departamentos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Departamento</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('departamento_create')
                                            <a href="{{ route('departamentos.create') }}" class="btn btn-sm btn-facebook">Crear Departamento</a>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($departamentos as $departamento)
                                                    <tr>
                                                        <td>{{ $departamento->id }}</td>
                                                        <td>{{ $departamento->codigo }}</td>
                                                        <td>{{ $departamento->nombre }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('departamento_show')
                                                            <a href="{{ route('departamentos.show', $departamento->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            @endcan
                                                            @can('departamento_edit')
                                                            <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('departamento_destroy')
                                                            <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que desea eliminar Departamento?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $departamentos->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection