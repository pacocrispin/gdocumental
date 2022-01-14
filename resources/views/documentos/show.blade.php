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


                                            <img src="{{ $file->getUrl()  }}" alt="{{ $file->name }}">
                                            <h5 class="title mx-3">Descripción: {{ $documento->nombre }}</h5>

                                            <div class="card-text">
                                                <p class="text-center mb-1"><u>Datos:</u></p>
                                                <b>Nro. Documento: </b> 
                                                    {{ $documento->codigo }} <br>
                                                <b>Nombre doc:</b> 
                                                    {{ $documento->nombre }} <br>
                                                <b>Fecha creación: </b>
                                                    {{ $documento->created_at }} <br>
                                                <b>Fecha actualización: </b>
                                                    {{ $documento->updated_at }} <br> <br>
                                                <b>ID Creador:</b> 
                                                    {{ $documento->creado_por_id }} <br>
                                                <b>Nombre del creador: </b>
                                                    {{ $creadorDocumento->name }} <br>
                                                <b>Email del creador: </b>
                                                    {{ $creadorDocumento->email }} <br>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('documentos.index') }}"
                                                class="btn btn-sm btn-success mr-3">Volver</a>
                                            <a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-sm btn-primary">Editar</a>
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