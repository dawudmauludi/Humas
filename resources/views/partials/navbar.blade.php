<style>
   @font-face {
    font-family: 'Roboto';
    src: url('../fonts/Roboto.Medium.ttf');
    font-weight: normal;
    font-style: normal;
}

.navbar {
    position: fixed; /* Make the navbar fixed */
    top: 0; /* Position it at the top of the page */
    width: 100%; /* Ensure it spans the full width */
    z-index: 1000; /* Ensure it stays on top of other content */
    background-color: transparent;
    transition: background-color 0.3s ease;
}

.navbar.scrolled {
    background-color: #fdfdfd; /* Change this to the desired color */
}

.nav-item{
    font-family: 'Roboto';
    font-size: 0.9rem;
}

.navbar-nav .nav-item .nav-link {
    transition: border-left 0.3s ease, color 0.3s ease;
}

.navbar-nav .nav-item .nav-link:hover {
    border-bottom: 2px solid #000000;
}

.navbar-nav .nav-item .nav-link.active {
    border-bottom: 2px solid #000000;
    color: #1A73E8 !important;
}

.btn-login{
    background-color: #599DDC;
    font-family: 'Roboto';
}

.nav-item .dropdown-toggle {
    max-width: 150px; /* Sesuaikan dengan kebutuhan */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: inline-block;
    vertical-align: middle;
}

.nav-item .dropdown-toggle:hover,
.nav-item .dropdown-toggle:focus {
    overflow: visible;
    text-overflow: clip;
    white-space: normal;
}

.tooltip-inner {
    max-width: 200px; /* Sesuaikan dengan kebutuhan */
    white-space: normal;
}
</style>

<nav class="navbar navbar-expand-lg shadow navbar-light">
    <div class="container-nav container">
        <div class="logo">
            <a href="" class="navbar-brand fw-bold fs-6"><img src="{{ asset('img/LOGO_SMK.png') }}" alt="logo" width="50px">HUMAS & BKK SMKN 1 PASURUAN</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav gap-3 ms-auto">
                <li class="nav-item nav-items">
                    <a class="nav-link text-uppercase  {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase  {{ Request::is('Information') ? 'active' : '' }}" href="/Information" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Information
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">SK Humas</a></li>
                        <li><a class="dropdown-item" href="#">Susunan Pengurus Humas</a></li>
                        <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="#">Program Kerja</a></li>
                        <li><a class="dropdown-item" href="#">Prakerin</a></li>
                        <li><a class="dropdown-item" href="#">Recruitment</a></li>
                        <li><a class="dropdown-item" href="#">Mou</a></li>
                        <li><a class="dropdown-item" href="#">Tracer Student</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-uppercase  {{ Request::is('about') ? 'active' : '' }}" href="/about">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase  {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Berita & Acara</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link text-uppercase {{ Request::is('absensi') ? 'active' : '' }}" href="/absensi">E - Journal</a>
                </li>
                @endauth
                {{-- <li class="nav-item">
                    <a class="nav-link text-uppercase  {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
                </li> --}}
              
            </ul>
            
         
           
          
            {{-- <ul class="navbar-nav ms-auto">
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
               
                @endauth --}}
                <ul  class="navbar-nav ms-auto">
                    @auth
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=random&color=fff" alt="mdo" width="32" height="32" class="rounded-circle fw-bold">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item" href="/profil">Profile</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Log Out</button>
                        </form>
                        </ul>
                      </div>
                      @else
                      <li class="nav-item">
                        <a class="btn btn-login text-light {{ Request::is('login') ? 'active' : '' }}" href="/login">
                            <i class="bi bi-indent"></i>Login
                        </a>
                    </li>
                    @endauth
                </ul>
        </div>
       
    </div>
</nav>



<script>
    // Function to add the 'scrolled' class to the navbar when scrolling
       function handleScroll() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) { // Adjust this value as needed
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    // Listen for the scroll event
    window.addEventListener('scroll', handleScroll);

    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>