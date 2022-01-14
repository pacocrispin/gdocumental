@extends('layouts.main', ['activePage' => 'carpetas', 'titlePage' => 'Carpetas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Carpetas</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('carpeta_create')
                                            <a href="{{ route('carpetas.create') }}" class="btn btn-sm btn-facebook">Crear Carpeta</a>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Estado</th>
                                                <th>Creador</th> 
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($carpetas as $carpeta)
                                                    <tr>
                                                        <td>{{ $carpeta->id }}</td>
                                                        <td><a href="{{ route('carpetas.show', $carpeta->id) }}">{{ $carpeta->nombre }}</a></td>
                                                        <td>{{ $carpeta->estado }}</td>
                                                        <td>{{ $carpeta->usuario }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('carpeta_show')
                                                            <a href="{{ route('carpetas.show', $carpeta->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            @endcan
                                                            @can('carpeta_edit')
                                                            <a href="{{ route('carpetas.edit', $carpeta->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('carpeta_destroy')
                                                            <form action="{{ route('carpetas.destroy', $carpeta->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que desea eliminar esta Carpeta?')">
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
                                    {{ $carpetas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection