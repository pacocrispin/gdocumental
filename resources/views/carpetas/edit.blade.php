@extends('layouts.main',['activePage' => 'carpetas','titlePage' => 'Editar Carpeta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('carpetas.update', $carpeta->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Carpeta</h4>
                                <p class="card-category">Editar Datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre de la Carpeta</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $carpeta->nombre) }}">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado de la Carpeta</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="estado" value="{{ old('estado', $carpeta->estado) }}">
                                        @if ($errors->has('estado'))
                                            <span class="error text-danger" for="input-estado">{{ $errors->first('estado') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{ route('carpetas.index') }}" class="btn btn-success ">Volver</a>
                            </div>
                            <!--End Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection