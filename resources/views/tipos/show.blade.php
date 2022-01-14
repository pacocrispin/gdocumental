@extends('layouts.main', ['activePage' => 'tipos', 'titlePage' => 'Detalles del Tipo de Documento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Tipo de Documento</div>
                            <p class="card-category">Vista detallada del Tipo de Documento: {{ $tipo->id }}</p>
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
                                                        <h5 class="title mx-3">Descripción: {{ $tipo->descripcion }}</h5>
                                                    </a>
                                                </div>
                                            </p>
                                            <div class="card-text">
                                                <p class="text-center mb-1"><u>Datos:</u></p>
                                                <b>Identificador: </b> 
                                                    {{ $tipo->id }} <br>
                                                <b>Tipo de documento:</b> 
                                                    {{ $tipo->descripcion }} <br>
                                                <b>Fecha creación: </b>
                                                    {{ $tipo->created_at }} <br>
                                                <b>Fecha actualización: </b>
                                                    {{ $tipo->updated_at }} <br>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('tipos.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="{{ route('tipos.edit', $tipo->id) }}" class="btn btn-sm btn-primary">Editar</a>
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