@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Cant. Documentos</p>
              <h3 class="card-title">{{$cantidadDocumentos}}
                <small>total</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-info">launch</i>
                <a href="{{ route('documentos.index') }}">Ver Documentos...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">account_balance_wallet</i>
              </div>
              <p class="card-category">Bitácora</p>
              <a href="{{ route('bitacora') }}">
                <h4 class="card-title">Ver</h4>
              </a>              
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">today</i> Hoy día
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Fixed Issues</p>
              <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div> --}}
      </div>

      
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Módulo Usuarios</h4>
              <p class="card-category">
                <span class="text-success"><i class="material-icons">content_paste</i></span>
                <a href="{{ route('users.index')}}">Usuarios</a>
              </p>
              <p class="card-category">
                <span class="text-success"><i class="material-icons">rule</i></span> 
                <a href="{{ route('permissions.index')}}">Permisos</a>
              </p>
              <p class="card-category">
                <span class="text-success"><i class="material-icons">library_books</i></span> 
                <a href="{{ route('roles.index')}}">Roles</a>
              </p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> 
                  Último usuario creado 
                  @isset($ultimoUsuarioCreado)
                    {{$ultimoUsuarioCreado->created_at}}
                  @endisset
                  
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Módulo Documentos</h4>
              <p class="card-category">
                <span class="text-warning"><i class="material-icons">history_edu</i></span> 
                <a href="{{ route('tipos.index')}}">Tipo de documento</a> 
              </p>
              <p class="card-category">
                <span class="text-warning"><i class="material-icons">receipt_long</i></span> 
                <a href="{{ route('documentos.index')}}">Documentos</a> 
              </p>
              <p class="card-category">
                <span class="text-warning"><i class="material-icons">notes</i></span> 
                <a href="{{ route('etiquetas.index')}}">Etiquetas</a> 
              </p>
              <p class="card-category">
                <span class="text-warning"><i class="material-icons">folder</i></span> 
                <a href="{{ route('carpetas.index')}}">Carpetas</a> 
              </p>
              <p class="card-category">
                <span class="text-warning"><i class="material-icons">event</i></span> 
                <a href="">Eventos - Agendas</a> 
              </p>
              <p class="card-category">
                <span class="text-warning"><i class="material-icons">feedback</i></span> 
                <a href="{{ route('aviso.index')}}">Avisos</a> 
              </p>
              <p class="card-category">
                <span class="text-warning"><i class="material-icons">manage_search</i></span> 
                <a href="{{ route('explorador.index')}}">Explorar documentos</a> 
              </p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> último documento subido 
                  @isset($ultimoDocumentoCreado)
                    {{$ultimoDocumentoCreado->created_at}}
                    
                  @endisset
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Módulo Administración</h4>
              <p class="card-category">
                <span class="text-danger"><i class="material-icons">assignment_turned_in</i></span> 
                <a href="{{ route('cargos.index')}}">Cargos</a> 
              </p>
              <p class="card-category">
                <span class="text-danger"><i class="material-icons">apartment</i></span> 
                <a href="{{ route('departamentos.index')}}">Departamentos</a> 
              </p>
              <p class="card-category">
                <span class="text-danger"><i class="material-icons">engineering</i></span> 
                <a href="{{ route('trabajadores.index')}}">Trabajadores</a> 
              </p>
              <p class="card-category">
                <span class="text-danger"><i class="material-icons">group</i></span> 
                <a href="{{ route('pacientes.index')}}">Pacientes</a> 
              </p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> último paciente creado 
                  @isset($ultimoPacienteCreado)
                    {{$ultimoPacienteCreado->created_at}}                    
                  @endisset
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </div>
@endsection