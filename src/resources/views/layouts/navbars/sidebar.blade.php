<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('assets/dashboard/img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('index') }}" class="simple-text logo-normal">
      <b>{{ __('Car Renting') }}</b>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage ?? '' ?? '' == 'profile' || $activePage ?? '' ?? '' == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">person</i>
          <p>{{ __('Perfil') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Historial') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">library_books</i>
            <p>{{ __('Información') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Coches') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Nuestras Oficinas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notificaciones') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('Soporte') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>
