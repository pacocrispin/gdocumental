<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="#">{{ $titlePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
        <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Buscar...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              {{ __('Stats') }}
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">
              @if (count(auth()->user()->unreadNotifications))
              <span >{{count(auth()->user()->unreadNotifications)}}</span>
                
              @endif
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <span class="dropdown-header">Notificaciones No Leidas</span>
            @forelse (auth()->user()->unreadNotifications as $notification)
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope mr-2"></i> {{$notification->data['titulo']}}
              <span class="ml-3 pull-right text-muted text-sm"> {{$notification->created_at->diffForHumans()}}</span>
            </a>
            @empty
            <span class="dropdown-header"> Sin Notificaciones por leer</span>
            @endforelse
            <div class="dropdown-divider"></div>
            <span class="dropdown-header">Notificaciones Leidas</span>
            @forelse (auth()->user()->readNotifications as $notification)
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope mr-2"></i> {{$notification->data['descripcion']}}
              <span class="ml-3 pull-right text-muted text-sm"> {{$notification->created_at->diffForHumans()}}</span>
            </a>
            @empty
            <span class="dropdown-header"> Sin Notificaciones</span>
            @endforelse
            <div class="dropdown-divider"></div>
            <a href="{{route('markAsRead')}}" class="dropdown-item dropdown-footer">Marcar todas como Leidas</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              {{ __('Account') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
            {{-- <a class="dropdown-item" href="#">{{ __('Profile') }}</a> --}}
            <a class="dropdown-item" href="{{ route('bitacora')}}">{{ __('Bitácora') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
