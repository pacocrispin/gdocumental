<div class="sidebar" data-color="orange" data-background-color="white">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <div class="row justify-content-center">
      <img src="{{ asset('gDocumental.svg') }}" alt="logo" width="50px">
      <a href="/" class="simple-text logo-normal">
        Gestión Documental
      </a>
    </div>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Modulos') }}</p>
        </a>
      </li>

      {{-- ModuloUsuarios --}}
      <li class="nav-item {{ ($activePage == 'users' || $activePage == 'permissions' || $activePage == 'roles') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#ModuloUsuarios" aria-expanded="false">
          <i class="material-icons">support_agent</i>
          <p>{{ __('Modulo Usuarios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="ModuloUsuarios">
          <ul class="nav">
            @can('user_index')
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Usuarios') }}</p>
              </a>
            </li>
            @endcan
            @can('permission_index')
            <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('permissions.index') }}">
                <i class="material-icons">rule</i>
                <p>{{ __('Permisos') }}</p>
              </a>
            </li>
            @endcan
            @can('role_index')
            <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('roles.index') }}">
                <i class="material-icons">library_books</i>
                  <p>{{ __('Roles') }}</p>
              </a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      {{-- fin de ModuloUsuarios --}}
      
      {{-- ModuloDocumentos --}}
      <li class="nav-item {{ ($activePage == 'documentos' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#ModuloDocumentos" aria-expanded="false">
          <i class="material-icons">inventory_2</i>
          <p>{{ __('Modulo Documentos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="ModuloDocumentos">
          <ul class="nav">
            @can('tipo_index')
            <li class="nav-item{{ $activePage == 'tipos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('tipos.index') }}">
                <i class="material-icons">history_edu</i>
                <p>{{ __('Tipo de Documento') }}</p>
              </a>
            </li>
            @endcan
            @can('documento_index')
            <li class="nav-item{{ $activePage == 'documentos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('documentos.index') }}">
                <i class="material-icons">receipt_long</i>
                  <p>{{ __('Documentos') }}</p>
              </a>
            </li>
            @endcan
            @can('etiqueta_index')
            <li class="nav-item{{ $activePage == 'etiquetas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('etiquetas.index') }}">
                <i class="material-icons">notes</i>
                <p>{{ __('Etiqueta de Documento') }}</p>
              </a>
            </li>
            @endcan
            @can('carpeta_index')
            <li class="nav-item{{ $activePage == 'carpetas' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('carpetas.index') }}">
                <i class="material-icons">folder</i>
                  <p>{{ __('Carpetas') }}</p>
              </a>
            </li>
            @endcan
            <li class="nav-item{{ $activePage == 'aviso' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('aviso.create') }}">
                <i class="material-icons">language</i>
                <p>{{ __('Aviso') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'aviso' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('aviso.index') }}">
                <i class="material-icons">manage_search</i>
                  <p>{{ __('Notificaciones') }}</p>
              </a>
            </li>
            @can('explorador_index')
            <li class="nav-item{{ $activePage == 'explorador' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('explorador.index') }}">
                <i class="material-icons">manage_search</i>
                  <p>{{ __('Explorador') }}</p>
              </a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      {{-- fin de ModuloDocumentos --}}

      {{-- ModuloAdministracion --}}
      <li class="nav-item {{ ($activePage == 'trabajadores' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#ModuloAdministracion" aria-expanded="false">
          <i class="material-icons">badge</i>
          <p>{{ __('Modulo Administración') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="ModuloAdministracion">
          <ul class="nav">
            @can('cargo_index')
            <li class="nav-item{{ $activePage == 'cargos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cargos.index') }}">
                <i class="material-icons">assignment_turned_in</i>
                  <p>{{ __('Cargos') }}</p>
              </a>
            </li>
            @endcan
            @can('departamento_index')
            <li class="nav-item{{ $activePage == 'departamentos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('departamentos.index') }}">
                <i class="material-icons">apartment</i>
                <p>{{ __('Departamento') }}</p>
              </a>
            </li>
            @endcan
            @can('trabajadore_index')
            <li class="nav-item{{ $activePage == 'trabajadores' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('trabajadores.index') }}">
                <i class="material-icons">engineering</i>
                  <p>{{ __('Trabajadores') }}</p>
              </a>
            </li>
            @endcan
            @can('paciente_index')
            <li class="nav-item{{ $activePage == 'pacientes' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('pacientes.index') }}">
                <i class="material-icons">group</i>
                <p>{{ __('Paciente') }}</p>
              </a>
            </li>    
            @endcan
          </ul>
        </div>
      </li>
      {{-- fin de ModuloAdministracion --}}
      


      {{-- herramientas --}}
      <li class="nav-item {{ ($activePage == 'bitacora' || $activePage == 'backup') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#showHerramientas" aria-expanded="false">
          <i class="material-icons">settings</i>
          <p>{{ __('Herramientas') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="showHerramientas">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'bitacora' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('bitacora') }}">
                <span class="sidebar-mini"> LOG </span>
                <span class="sidebar-normal">{{ __('Bitácora') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'backup' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> BU </span>
                <span class="sidebar-normal"> {{ __('Backup') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      {{-- fin de herramientas --}}
    </ul>
  </div>
</div>
