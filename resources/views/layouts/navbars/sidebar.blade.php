<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Gestion Documental') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Modulos') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Administrativo') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            @can('cargo_index')
            <li class="nav-item{{ $activePage == 'cargos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('cargos.index') }}">
                <span class="sidebar-mini"> ADM </span>
                <span class="sidebar-normal">{{ __('Cargo') }} </span>
              </a>
            </li>
            @endcan
            @can('departamento_index')
            <li class="nav-item{{ $activePage == 'departamentos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('departamentos.index') }}">
                <span class="sidebar-mini"> ADM </span>
                <span class="sidebar-normal"> {{ __('Departamento') }} </span>
              </a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      @can('user_index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Usuarios') }}</p>
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
      @can('permission_index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permisos') }}</p>
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
      @can('tipo_index')
      <li class="nav-item{{ $activePage == 'tipos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('tipos.index') }}">
          <i class="material-icons">language</i>
          <p>{{ __('Tipo de Documento') }}</p>
        </a>
      </li>
      @endcan
      <li class="nav-item{{ $activePage == 'aviso' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('aviso.create') }}">
          <i class="material-icons">language</i>
          <p>{{ __('Aviso') }}</p>
        </a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-blog"></i>             
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </li>
    </ul>
  </div>
</div>
