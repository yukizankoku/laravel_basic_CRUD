<nav class="navbar navbar-expand-lg navbar-light" style="background-color: gold">
  <div class="container-fluid">
    <img src="{{ asset('img/logo.png') }}" alt="logo" width="50">
    <a class="navbar-brand" href="/">Domus Mea</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('service') ? 'active' : '' }}" aria-current="page" href="/service">Services</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">              
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Property Agency</a></li>
              <li><a class="dropdown-item" href="#">Contractor</a></li>
              <li><a class="dropdown-item" href="#">Designer</a></li>
              <li><a class="dropdown-item" href="#">Financial Calculator</a></li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ request()->is('portofolio*') ? 'active' : '' }}" aria-current="page" href="/portofolio">Portofolio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/portofolio/category/design">Design</a></li>
              <li><a class="dropdown-item" href="/portofolio/category/build-and-progress">Build & Progress</a></li>
              <li><a class="dropdown-item" href="/portofolio/category/interior">Interior</a></li>
              <li><a class="dropdown-item" href="/portofolio/category/exterior">Exterior</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('join') ? 'active' : '' }}" href="/join">Join Us!</a>
          </li>
        </ul>
        <ul class="navbar-nav">
        @auth
        <div class="dropdown">
          <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
          </ul>
        </div>
        @else
        <li class="nav-item">
          <a href="/login" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
        @endauth        
      </div>
    </div>
  </nav>