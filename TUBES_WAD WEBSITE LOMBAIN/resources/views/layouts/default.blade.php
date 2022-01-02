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
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto" style="">
                <a class="nav-link text-dark @if(Request::is('/')) fw-bold @endif"   href="{{ url('/') }}">Home </a>
                <a class="nav-link text-dark @if(Request::is('vaccine')) fw-bold @endif" href="{{ url('/vaccine') }}">Vaccine</a>
                <a class="nav-link text-dark @if(Request::is('patient')) fw-bold @endif" href="{{ url('/patient') }}" >Patient</a>
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
    <footer class="bg-light text-center text-lg-start"style="margin-top:270px;">
    <div class="text-center p-3">
    ©2021 Copyright:
    <a class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal4">Muhammad Haikal Qolby_1202190096</a>
  </div>
</body>
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method='post' action=''>
                <div class="modal-body">
                    <label for="modal" class="form-label">Kesan dan Pesan Praktikum</label>
                    <hr>
                    <label for="modal" class="form-label">Kesan        : Praktikum yang sangat mantap dan greget</label>
                    <br>
                    <label for="modal" class="form-label">Pesan        : semoga dari praktikum ini para praktikan dapat ilmu tentang pengembangan web </label>
                </div>
</html>