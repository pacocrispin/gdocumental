@extends('layouts.main',['activePage' => 'documentos','titlePage' => 'Editar Documento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('documentos.update', $documento->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Documento</h4>
                                <p class="card-category">Editar Datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Documento</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $documento->nombre) }}">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado del Documento</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="estado" value="{{ old('estado', $documento->estado) }}">
                                        @if ($errors->has('estado'))
                                            <span class="error text-danger" for="input-estado">{{ $errors->first('estado') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="numero" class="col-sm-2 col-form-label">Numero del Documento</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="numero" value="{{ old('numero', $documento->numero) }}">
                                        @if ($errors->has('numero'))
                                            <span class="error text-danger" for="input-numero">{{ $errors->first('numero') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="carpeta" class="col-sm-2 col-form-label">Carpeta del documento</label>
		                            <select name="carpeta_id" id="carpeta_id" class="custom-select col-sm-4" >Seleccionar carpeta
			                            <option disabled selected>Seleccionar carpeta</option>
			                            @foreach($carpetas as $carpeta)
                                            <option value="{{ $carpeta->id }}" 
                                                
                                            >
                                                {{$carpeta->nombre}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                            <!--End Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection