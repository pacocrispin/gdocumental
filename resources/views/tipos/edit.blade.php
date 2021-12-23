@extends('layouts.main',['activePage' => 'tipos','titlePage' => 'Editar Tipo de Documento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('tipos.update', $tipo->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tipo de Documento</h4>
                                <p class="card-category">Editar Dato</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion', $tipo->descripcion) }}" autofocus>
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