@extends('layouts.main',['activePage' => 'etiquetas','titlePage' => 'Editar Etiqueta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('etiquetas.update', $etiqueta->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Etiqueta</h4>
                                <p class="card-category">Editar Datos</p>
                            </div>
                            <div class="card-body">
                                
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion', $etiqueta->descripcion) }}">
                                        @if ($errors->has('descripcion'))
                                            <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion') }}</span>
                                        @endif
                                    </div>
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