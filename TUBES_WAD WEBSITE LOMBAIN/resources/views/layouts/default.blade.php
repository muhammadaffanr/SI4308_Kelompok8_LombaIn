<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EAD Health Center</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>
<body style="background-color:#f2f2f2">

<section id="Home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src=""style="width: auto;">LombaIn</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">SD</a></li>
                  <li><a class="dropdown-item" href="#">SMP</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">SMA</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/create') }}">Register</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>  
            <div class="dropdown">
              <button class="btn btn-outline-success" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Login
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#LOGIN">Admin</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#LOGIN1">Student</a></li>
              </ul>
            </div>        
      </nav>
    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
   
</html>