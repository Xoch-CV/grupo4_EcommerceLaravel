<nav class="navbar navbar-expand-md navbar-dark">
    <!-- Left navbar -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
        <i class="fas fa-bars"></i>
      </button>
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href={{ url('/') }}>Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">f.a.q.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contacto</a>
          </li>
        </ul>
      </div>
    <!-- Logo -->
      <div class="order-0">
        <h1>T<span class="iso">!</span>CKET</h1>
      </div>
    <!-- Rigth navbar -->
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <div id="login" class="logout">
        @if (Route::has('login'))
            @auth
            <div id="login" class="login">
              <li class="nav-item2 dropdown">

                @if (Auth::user()->role!=1)
                <a href="/cart">CARRITO {{$order->events()->count() ?? 0}}</a>
                @endif
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  HOLA {{ Auth::user()->name }}!
                </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/profile') }}">Ir a mi perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                  </div>
              </li>
            </div>

                @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Log in</a>
              </li>
                @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">sign up</a>
              </li>
                @endif
            @endauth
        @endif
      </ul>
    </div>
</nav>
