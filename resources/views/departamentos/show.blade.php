@extends('layouts.main', ['activePage' => 'departamentos', 'titlePage' => 'Detalles del Departamento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Departamentos</div>
                            <p class="card-category">Vista detallada del Departamento: {{ $departamento->nombre }}</p>
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
                                                        <h5 class="title mx-3">{{ $departamento->nombre }}</h5>
                                                    </a>
                                                    <p class="description">
                                                        <b>Descripción:</b> {{ $departamento->nombre }} <br>
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-text">
                                                <p class="text-center mb-1"><u>Datos:</u></p>
                                                <b>Código: </b> 
                                                    {{ $departamento->codigo }} <br>
                                                <b>Departamento:</b> 
                                                    {{ $departamento->nombre }} <br>
                                                <b>Fecha creación: </b>
                                                    {{ $departamento->created_at }} <br>
                                                <b>Fecha actualización: </b>
                                                    {{ $departamento->updated_at }} <br>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('departamentos.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-sm btn-primary">Editar</a>
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