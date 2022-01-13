@extends('layouts.main', ['activePage' => 'etiquetas', 'titlePage' => 'Etiquetas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Etiquetas</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('etiqueta_create')
                                            <a href="{{ route('etiquetas.create') }}" class="btn btn-sm btn-facebook">Crear Etiqueta</a>
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
                                                @foreach ($etiquetas as $etiqueta)
                                                    <tr>
                                                        <td>{{ $etiqueta->id }}</td>
                                                        <td>{{ $etiqueta->descripcion }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('etiqueta_show')
                                                            <a href="{{ route('etiquetas.show', $etiqueta->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            @endcan
                                                            @can('etiqueta_edit')
                                                            <a href="{{ route('etiquetas.edit', $etiqueta->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('etiqueta_destroy')
                                                            <form action="{{ route('etiquetas.destroy', $etiqueta->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que desea eliminar etiqueta?')">
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
                                    {{ $etiquetas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection