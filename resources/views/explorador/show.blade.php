@extends('layouts.main', ['activePage' => 'explorador', 'titlePage' => 'Documentos de la Carpeta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Carpeta: {{ $carpeta->nombre }} </div>
                            <p class="card-category">Vista detallada de los documentos dentro de {{ $carpeta->nombre }}</p>
                        </div>
                        <!--body-->
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                            <div class="card">
                                
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('documento_create')
                                            <a href="{{ route('documentos.create') }}" class="btn btn-sm btn-facebook">Añadir Documento</a>
                                            @endcan
                                            <a href="{{ route('explorador.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Estado</th>
                                                <th>Numero</th>
                                                
                                                <th>Creador</th> 
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($documentos as $documento)
                                                    <tr>
                                                        <td>{{ $documento->id }}</td>
                                                        <td>{{ $documento->nombre }}</td>
                                                        <td>{{ $documento->estado }}</td>
                                                        <td>{{ $documento->numero }}</td>
                                                        
                                                        <td>{{ $documento->usuario }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('documento_show')
                                                            <a href="{{ route('documentos.show', $documento->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            @endcan
                                                            @can('documento_edit')
                                                            <a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('documento_destroy')
                                                            <form action="{{ route('documentos.destroy', $documento->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que desea eliminar el Documento?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>
                                                            @endcan
                                                            @can('documento_download')
                                                            <p class="form-group">
                                                            <a href="{{url('/' . $documento->uuid . '/download')}}"class="btn btn-alert"><i class="material-icons">download</i> </a>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $documentos->links() }}
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection