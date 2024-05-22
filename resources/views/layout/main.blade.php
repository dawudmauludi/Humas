<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- My Css --}}
    <link rel="stylesheet" href="/css/style.css">


     


    
    <title>Humas | SMKN 1 PASURUAN</title>
  </head>
  <body>
    
   
<style>
   .container-navbar {
            background-color: white;
            position: fixed;
            top: 0;
            z-index: 99999;
            width: 100%;
            
        }

       

        
        .navbar-nav .nav-item .nav-link:hover{
          border-bottom: 2px solid #000000;
        }
        .navbar-nav .nav-item .nav-link.active {
            border-bottom: 2px solid #000000;
            color: blue !important;
        }

  
        body {
            margin-top: 6%;
        }
</style>

<nav class="container-navbar navbar navbar-expand-lg shadow navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{asset('img/smk_logo.png')}}" alt="logo" width="50px"></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav gap-4">
          <li class="nav-item nav-items">
            <a class="nav-link fw-bolder text-dark {{  Request::is('/')  ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-dark {{  Request::is('about')  ? 'active' : '' }}" href="/about">Visi & Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-dark {{  Request::is('posts')  ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-dark {{  Request::is('categories')  ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-bolder text-dark {{  Request::is('Information')  ? 'active' : '' }}" href="/Information" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a  class="nav-link {{  Request::is('login')  ? 'active' : '' }}" href="/login"> <i class="bi bi-indent"></i>Login</a>
            </li>
            @endauth
          </ul>

      </div>
    </div>
  </nav>




      <section class="container mt-4">
       @yield('container')
      </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>