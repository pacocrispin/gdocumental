@extends('layouts.main',['activePage' => 'pacientes','titlePage' => 'Editar Paciente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('pacientes.update', $paciente->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Paciente</h4>
                                <p class="card-category">Editar Datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="codigo" class="col-sm-2 col-form-label">Codigo del Paciente</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" name="codigo" value="{{ old('codigo', $paciente->codigo) }}" autocomplete="off" autofocus>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="cedula" class="col-sm-2 col-form-label">Cedula del Paciente</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" name="cedula" value="{{ old('cedula', $paciente->cedula) }}" autocomplete="off">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Paciente</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $paciente->nombre) }}" autocomplete="off">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="direccion" class="col-sm-2 col-form-label">Direccion del Paciente</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" name="direccion" value="{{ old('direccion', $paciente->direccion) }}" autocomplete="off">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="telefono" class="col-sm-2 col-form-label">Numero telefonico del Paciente</label>
                                    <div class="col-sm-7">
                                      <input type="number" class="form-control" name="telefono" value="{{ old('telefono', $paciente->telefono) }}" autocomplete="off">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="celular" class="col-sm-2 col-form-label">Numero de celular del Paciente</label>
                                    <div class="col-sm-7">
                                      <input type="number" class="form-control" name="celular" value="{{ old('celular', $paciente->celular) }}" autocomplete="off">
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