<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('index') }}">Annunci Auto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('annunci.create') }}">Inserisci un annuncio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('annunci.index') }}">I miei annunci</a>
          </li>
          
          @guest
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrati</a>
            </li>
          @endguest
          @auth
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();this.closest('form').submit();">
                Logout
                </a>
            </form>
          </li>
          @if (Auth::user()->role->name=='Amministratore')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('adminroute') }}">
              Admin Area
            </a>
          </li>
          @endif
          @endauth
        </ul>
        {{--<form class="d-flex" method="POST" action=" {{ route('cerca') }} ">
          @csrf
          <input class="form-control me-2" name="cerca" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>--}}
      </div>
    </div>
  </nav>