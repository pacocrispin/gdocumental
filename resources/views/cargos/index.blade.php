@extends('layouts.main', ['activePage' => 'cargos', 'titlePage' => 'Cargos'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Cargos</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('cargo_create')
                                            <a href="{{ route('cargos.create') }}" class="btn btn-sm btn-facebook">Crear Cargo</a>
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
                                                @foreach ($cargos as $cargo)
                                                    <tr>
                                                        <td>{{ $cargo->id }}</td>
                                                        <td>{{ $cargo->codigo }}</td>
                                                        <td>{{ $cargo->nombre }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('cargo_show')
                                                            <a href="{{ route('cargos.show', $cargo->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            @endcan
                                                            @can('cargo_edit')
                                                            <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('cargo_destroy')
                                                            <form action="{{ route('cargos.destroy', $cargo->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que desea eliminar Cargo?')">
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
                                    {{ $cargos->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection