<nav class="navbar navbar-expand-lg bg-light mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage')}}">
    <i class="bi bi-vinyl-fill"></i>
    <span>Home</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a 
          class="nav-link dropdown-toggle" 
          href="#" 
          role="button" 
          data-bs-toggle="dropdown" 
          aria-expanded="false">Records
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('records.index') }}">Records List</a></li>
            {{-- <li><a class="dropdown-item" href="#">Records List</a></li> --}}
            <li><hr class="dropdown-divider"></li>
            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>