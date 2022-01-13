@extends('layouts.main', ['activePage' => 'etiquetas', 'titlePage' => 'Detalles de la Etiqueta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Cargos</div>
                            <p class="card-category">Vista detallada de la Etiqueta: {{ $etiqueta->descripcion }}</p>
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
                                                    <a href="#" class="d-flex">
                                                        
                                                        <h5 class="title mx-3">{{ $etiqueta->descripcion }}</h5>
                                                    </a>
                                                    <p class="description">
                                                        id : {{ $etiqueta->id }} <br>
                                                        fecha creacion : {{ $etiqueta->created_at }} <br>
                                                    </p>
                                                </div>
                                            </p>
                                            
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('etiquetas.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="#" class="btn btn-sm btn-primary">Editar</a>
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