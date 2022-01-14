@extends('layouts.main', ['activePage' => 'pacientes', 'titlePage' => 'Detalles del Paciente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Pacientes</div>
                            <p class="card-category">Vista detallada del Paciente: {{ $paciente->nombre }}</p>
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
                                                        <h5 class="title mx-3">{{ $paciente->nombre }}</h5>
                                                    </a>
                                                </div>
                                            </p>
                                            <div class="card-text">
                                                <p class="text-center mb-1"><u>Datos:</u></p>
                                                <b>Código: </b> 
                                                    {{ $paciente->codigo }} <br>
                                                <b>Cedula:</b> 
                                                    {{ $paciente->cedula }} <br>
                                                <b>Nombre del paciente: </b> 
                                                    {{ $paciente->nombre }} <br>
                                                <b>Dirección:</b> 
                                                    {{ $paciente->direccion }} <br>
                                                <b>Teléfono:</b> 
                                                    {{ $paciente->telefono }} <br>
                                                <b>Celular:</b> 
                                                    {{ $paciente->celular }} <br>
                                                <b>Fecha creación: </b>
                                                    {{ $paciente->created_at }} <br>
                                                <b>Fecha actualización: </b>
                                                    {{ $paciente->updated_at }} <br>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('pacientes.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-sm btn-primary">Editar</a>
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