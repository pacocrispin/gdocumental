@extends('layouts.main', ['activePage' => 'tipos', 'titlePage' => 'Tipos de Documento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Tipos de Documentos</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('tipo_create')
                                            <a href="{{ route('tipos.create') }}" class="btn btn-sm btn-facebook">Crear Tipo de Documento</a>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Descripcion</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($tipos as $tipo)
                                                    <tr>
                                                        <td>{{ $tipo->id }}</td>
                                                        <td>{{ $tipo->descripcion }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('tipo_show')
                                                            <a href="{{ route('tipos.show', $tipo->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            @endcan
                                                            @can('tipo_edit')
                                                            <a href="{{ route('tipos.edit', $tipo->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('tipo_destroy')
                                                            <form action="{{ route('tipos.destroy', $tipo->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que desea eliminar Tipo de Documento?')">
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
                                    {{ $tipos->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection