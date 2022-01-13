@extends('layouts.main', ['activePage' => 'trabajadores', 'titlePage' => 'Editar Trabajador'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('trabajadores.update', $trabajadore->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar Trabajador</h4>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="codigo" value="{{ old('codigo', $trabajadore->codigo) }}" autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="cedula" value="{{ old('cedula', $trabajadore->cedula) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $trabajadore->nombre) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="direccion" value="{{ old('direccion', $trabajadore->direccion) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="telefono" value="{{ old('telefono', $trabajadore->telefono) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="celular" value="{{ old('celular', $trabajadore->celular) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="cargo_id" class="col-sm-2 col-form-label">Cargo</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="cargo_id" value="{{ old('cargo_id', $trabajadore->cargo->nombre) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="departamento_id" class="col-sm-2 col-form-label">Departamento</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="departamento_id" value="{{ old('departamento_id', $trabajadore->departamento->nombre) }}" autocomplete="off">
                </div>
              </div>
              <div class="row">
                <label for="user_id" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="user_id" value="{{ old('user_id', $trabajadore->user_id) }}" autocomplete="off">
                </div>
              </div>
              
            </div>
            <!--End body-->
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
          <!--End footer-->
        </form>
      </div>
    </div>
  </div>
</div>
@endsection