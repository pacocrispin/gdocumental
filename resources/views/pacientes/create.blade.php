@extends('layouts.main',['activePage' => 'pacientes','titlePage' => 'Nuevo Paciente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('pacientes.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Paciente</h4>
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
                                    <label for="codigo" class="col-sm-2 col-form-label">Codigo del Paciente</label>
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="codigo" autocomplete="off" autofocus>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="cedula" class="col-sm-2 col-form-label">Cedula del Paciente</label>
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="cedula" autocomplete="off">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre del Paciente</label>
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="nombre" autocomplete="off">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="direccion" class="col-sm-2 col-form-label">Direccion del Paciente</label>
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="direccion" autocomplete="off">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="telefono" class="col-sm-2 col-form-label">Telefono del Paciente</label>
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <input type="number" class="form-control" name="telefono" autocomplete="off">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label for="celular" class="col-sm-2 col-form-label">celular del Paciente</label>
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <input type="number" class="form-control" name="celular" autocomplete="off">
                                      </div>
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