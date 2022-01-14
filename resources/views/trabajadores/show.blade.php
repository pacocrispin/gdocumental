@extends('layouts.main', ['activePage' => 'trabajadores', 'titlePage' => 'Detalles del trabajador'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Trabajadores</h4>
            <p class="card-category">Vista detallada del trabajador: {{ $trabajadore->nombre }}</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            <div class="row">
              <!-- first -->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                          <img class="img-thumbnail" src="{{ asset('/image')}}/{{$trabajadore->foto}}" alt="">
                        </a>
                      </div>
                    </p>
                    <div class="card-text">
                        <p class="text-center mb-1"><u>Datos:</u></p>
                        <b>Código: </b> 
                            {{ $trabajadore->codigo }} <br>
                        <b>Cedula:</b> 
                            {{ $trabajadore->cedula }} <br>
                        <b>Nombre Completo: </b> 
                            {{ $trabajadore->nombre }} <br>
                        <b>Dirección:</b> 
                            {{ $trabajadore->direccion }} <br>
                        <b>Fecha creación: </b>
                            {{ $trabajadore->created_at }} <br>
                        <b>Fecha actualización: </b>
                            {{ $trabajadore->updated_at }} <br>
                    </div>
                    <div class="card-description">
                      @if ($departamento)
                          <span class="badge rounded-pill bg-dark text-white">{{ $departamento->nombre }}</span>
                      @else
                          <span class="badge badge-danger bg-danger">Departamento sin Elegir</span>
                      @endif
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('trabajadores.edit', $trabajadore->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
</div>
@endsection