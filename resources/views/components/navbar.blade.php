<nav class="navbar navbar-expand-lg navbar-dark main-theme border-bottom border-light border-2">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        The Vana
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        @if (Route::has('login'))
        <ul class="navbar-nav">
          <li class="nav-item">
            @auth
            <a class="nav-link active" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">{{ Auth::user()->username }}</a>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <input type="submit" value="Logout">
            </form>
            
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('register') }}">Register</a>
          </li>
         @endif
         @endauth
        </ul>
        @endif
      </div>
    </div>
  </nav>
         
         
           
         
       