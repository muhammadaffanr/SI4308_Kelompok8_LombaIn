@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 ">
            @if(session()->has('status'))
            </div><div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Login
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            
            <div class="card  " style="margin-top:70px; width: 28rem;">
                <div class="card-body p-4">
                        <h4 class="card-title text-center">Login</h4>
                        <hr>
                        <form method="POST" action="{{ url('/login') }}"enctype="multipart/form-data">
                            @csrf
                            <label for="email"> <b>Email</b></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Alamat E-mail" autofocus required>
                            <br>
                            <label for="password"> <b>Kata Sandi</b></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda" required>
                            <br>
                            <input type="checkbox" name="remember" id="remember">                
                            <label for="remember">Remember Me </label>
                            <br><br>
                            <center><button type="submit" name="login" class="btn btn-primary" style="width: 140px;">Login</button></center>
                            <br>
                            <p class="text-center">Anda belum punya akun? <a href="{{ url('/regis') }}">Register</a></p>
                        </form>       
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection