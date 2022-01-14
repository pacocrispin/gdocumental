@extends('layouts.main', ['activePage' => 'carpetas', 'titlePage' => 'Detalles del Carpeta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Carpetas</div>
                            <p class="card-category">Vista detallada de la Carpeta: {{ $carpeta->nombre }}</p>
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
                                                        <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                        <h5 class="title mx-3">{{ $carpeta->nombre }}</h5>
                                                    </a>
                                                    <p class="description">
                                                        <b>Descripción:</b> {{ $carpeta->nombre }} <br>
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-text">
                                                <p class="text-center mb-1"><u>Datos:</u></p>
                                                <b>Nombre de la carpeta: </b> 
                                                    {{ $carpeta->nombre }} <br>
                                                <b>Estado:</b> 
                                                    {{ $carpeta->estado }} <br>
                                                <b>Fecha creación: </b>
                                                    {{ $carpeta->created_at }} <br>
                                                <b>Fecha actualización: </b>
                                                    {{ $carpeta->updated_at }} <br>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('carpetas.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="{{ route('carpetas.edit', $carpeta->id) }}" class="btn btn-sm btn-primary">Editar</a>
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