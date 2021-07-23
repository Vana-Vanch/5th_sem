<nav class="navbar navbar-expand-lg navbar-dark main-theme border-bottom border-light">
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
            <a class="nav-link active" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link active" href="#">Login</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
           
            <a class="nav-link active" href="#">Register</a>
          </li>
         @endif
         @endauth
         
         
        </ul>
        @endif
       
      </div>
    </div>
  </nav>