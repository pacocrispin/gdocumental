@extends('layouts.main',['activePage' => 'documentos','titlePage' => 'Nuevo Documento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('documentos.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="card col-md-12">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Documento</h4>
                                <p class="card-category">Ingresar Datos</p>
                            </div>
                            <div class="card-body">
                                {{--@if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif--}}
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre del documento</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre" value="{{old('nombre')}}" autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado del documento</label>
                                    <div class="col-sm-7">
                                        {{-- <input type="text" class="form-control" name="estado" placeholder="Ingrese el Estado del Documento" value="{{old('estado')}}"> --}}
                                        <select class="custom-select" id="estado" name="estado">
                                            <option selected>Selecciona el estado del documento...</option>
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                                            <option value="en mora">En mora</option>
                                        </select>
                                        @if ($errors->has('estado'))
                                            <span class="error text-danger" for="input-estado">{{ $errors->first('estado') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="numero" class="col-sm-2 col-form-label">Número del documento</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="numero" pattern="^[0-9]+" min="1" placeholder="Ingrese el Número del Documento" value="{{old('numero')}}">
                                        @if ($errors->has('numero'))
                                            <span class="error text-danger" for="input-numero" >{{ $errors->first('numero') }}</span>
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
                                
                                <div class="row">
                                    <label for="file" class="col-sm-2 col-form-label">Documento</label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control" name="file" value="{{old('file')}}">
                                        @if ($errors->has('file'))
                                            <span class="error text-danger" for="input-file">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <script type="text/javascript">

                                function agregar_etiqueta() {
                                    let etiqueta_id = $("#etiquetas option:selected").val();
                                    let etiqueta_text = $("#etiquetas option:selected").text();

                                    $("#tblEtiquetas").append(`
                                                <tr id="tr-${etiqueta_id}">
                                                    <td>
                                                        <input type="hidden" name="etiqueta_id[]" value="${etiqueta_id}" />
                                                        <input type="hidden" name="descripcion[]" value="${etiqueta_text}" />
                                                        
                                                        ${etiqueta_text}    
                                                    </td>
                                                    
                                                    <td>
                                                        <button type="button" class="btn btn-danger" onclick="eliminar_etiqueta(${etiqueta_id})">X</button>
                                                    </td>
                                                </tr>
                                            `);
                                }


                                function eliminar_etiqueta(id) {
                                    $("#tr-" + id).remove();
                                }

                            </script>
                            <div class="form-row">
                                <div class="card">
                                    <div class="card-head m-t-3">
                                        <h4 class="text-center mt-2"> Etiquetas</h4>
                                    </div>
                                    <div class="form-inline">
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Nombre Etiqueta</label>
                                                <select name="etiquetas" id="etiquetas" class="custom-select" >
                                                    <option value="">Seleccione</option>
                                                    @foreach($etiquetas as $value)
                                                    <option value="{{ $value->id }}">{{ $value->descripcion }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <button onclick="agregar_etiqueta()" type="button"
                                                class="btn btn-sm btn-success pull-right">Agregar</button>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Descripción etiqueta</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblEtiquetas">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                            


                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <!--End Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection

