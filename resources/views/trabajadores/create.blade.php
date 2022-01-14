@extends('layouts.main', ['activePage' => 'trabajadores', 'titlePage' => 'trabajadores'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('trabajadores.store') }}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Crear Trabajador</h4>
              <p class="card-category">Ingresar datos</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="codigo" class="col-sm-2 col-form-label">Código</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Trab000" name="codigo" autocomplete="off" autofocus>
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input type="text" class="form-control" name="cedula" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nombre" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input type="text" class="form-control" name="direccion" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input type="number" maxlength="8" minlength="8" placeholder="7 0000000" class="form-control" name="telefono" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input type="number" maxlength="8" minlength="8" placeholder="3 3360000" class="form-control" name="celular" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="cargo_id" class="col-sm-2 col-form-label">Cargo</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <select name="cargo_id" class="custom-select">
                      @foreach ($cargos as $cargo)
                          <option value="{{$cargo->id}}">{{$cargo->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="departamento_id" class="col-sm-2 col-form-label">Departamento</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <select name="departamento_id" class="custom-select">
                      @foreach ($departamentos as $departamento)
                          <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <label for="user_id" class="col-sm-2 col-form-label">Asignar Usuario</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <select name="user_id" class="custom-select">
                      @foreach ($users as $user)
                          <option value="{{$user->id}}">{{$user->username}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <!--para ver la foto seleccionada-->
              
              <div class="row">
                <div class="col-sm-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" id="picture">
                    <label class="custom-file-label" for="foto">Seleccionar Foto</label>
                  </div>
                </div>
              </div>


            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <div class="button-container">
                 <a href="{{route('trabajadores.index')}}" class="btn btn-danger mr-3">Cancelar</a>
                 <button type="submit" class="btn btn-primary">Guardar</button>
              </div>   
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection