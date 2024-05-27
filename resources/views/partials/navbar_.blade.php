<style>
 .container-navbar {
    background-color: white;
    /* position: fixed; */
    top: 0;
    z-index: 99999;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-nav .nav-item .nav-link:hover {
    border-bottom: 2px solid #000000;
}
.navbar-nav .nav-item .nav-link.active {
    border-bottom: 2px solid #000000;
    color: blue !important;
}



</style>
 
<nav class="navbar navbar-expand-lg shadow navbar-light">
  <div class="container-navbar container">
      <a class="navbar-brand fw-bold" href="/">
          <img src="{{ asset('img/LOGO_SMK.png') }}" alt="logo" width="50px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav gap-4">
              <li class="nav-item nav-items">
                  <a class="nav-link fw-bolder text-dark {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fw-bolder text-dark {{ Request::is('about') ? 'active' : '' }}" href="/about">Visi & Misi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fw-bolder text-dark {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fw-bolder text-dark {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle fw-bolder text-dark {{ Request::is('Information') ? 'active' : '' }}" href="/Information" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Information
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
              </li>
          </ul>

          <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome Back, {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Log Out</button>
                          </form>
                      </li>
                  </ul>
              </li>
              @else
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login">
                      <i class="bi bi-indent"></i>Login
                  </a>
              </li>
              @endauth
          </ul>
      </div>
  </div>
</nav>
