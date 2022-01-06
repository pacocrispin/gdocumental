<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
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
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
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
      @can('cargo_index')
      <li class="nav-item{{ $activePage == 'cargos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('cargos.index') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Cargos') }}</p>
        </a>
      </li>
      @endcan
      @can('departamento_index')
      <li class="nav-item{{ $activePage == 'departamentos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('departamentos.index') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Departamento') }}</p>
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
    </ul>
  </div>
</div>
