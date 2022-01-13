@extends('layouts.main', ['activePage' => 'documentos', 'titlePage' => 'Detalles del Documento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Documento</div>
                            <p class="card-category">Vista detallada del Documento: {{ $documento->nombre }}</p>
                        </div>
                        <!--body-->
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    
                                                        
                                                        <img src="{{ $file->getUrl()  }}" alt="{{ $file->name }}" >
                                                        <h5 class="title mx-3">Nombre de documento: {{ $documento->nombre }}</h5>
                                                    
                                                    <p class="description">
                                                        numero :{{ $documento->numero }} <br>
                                                        nombre :{{ $documento->nombre }} <br>
                                                        estado :{{ $documento->estado }} <br>
                                                        
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                ID Creador : {{ $documento->creado_por_id}} <br>
                                                Fecha creacion : {{ $documento->created_at }}
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('documentos.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="" class="btn btn-sm btn-primary">Editar</a>
                                            </div>
                                        </div>
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