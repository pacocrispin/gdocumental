@extends('layouts.main', ['activePage' => 'cargos', 'titlePage' => 'Detalles del Cargo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Cargos</div>
                            <p class="card-category">Vista detallada del Cargo: {{ $cargo->nombre }}</p>
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
                                                        <h5 class="title mx-3">
                                                            {{ $cargo->nombre }}
                                                        </h5>
                                                    </a>
                                                    <p class="description">
                                                        <b>Descripción:</b> {{ $cargo->nombre }} <br>
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-text">
                                                <p class="text-center mb-1"><u>Datos:</u></p>
                                                <b>Código: </b> 
                                                    {{ $cargo->codigo }} <br>
                                                <b>Cargo:</b> 
                                                    {{ $cargo->nombre }} <br>
                                                <b>Fecha creación: </b>
                                                    {{ $cargo->created_at }} <br>
                                                <b>Fecha actualización: </b>
                                                    {{ $cargo->updated_at }} <br>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('cargos.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-sm btn-primary">Editar</a>
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