<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LombaIn</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto" style="">
                <a class="nav-link @if(Request::is('/')) fw-bold @endif"   href="{{ url('/') }}">Home </a>
                <a class="nav-link @if(Request::is('vaccine')) fw-bold @endif" href="{{ url('/create') }}">Daftar Lomba</a>
                <a class="nav-link @if(Request::is('patient')) fw-bold @endif" href="{{ url('/patient') }}" >Feedback</a>
                <a class="nav-link @if(Request::is('/')) fw-bold @endif"   href="{{ url('/vaccine') }}">Kategori </a>
                <a class="nav-link @if(Request::is('/')) fw-bold @endif"   href="{{ url('/login') }}">Login </a>
            </div>
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
    <footer class="bg-dark text-white text-center text-lg-start" style="margin-top:100px;">
        <div class="text-center p-3">
          © 2022 Copyright:
          <a class="text-white">LombaIn</a>
        </div>
      </footer>
</html>