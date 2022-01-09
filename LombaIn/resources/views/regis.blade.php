@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 ">
               <div class="card  " style="margin-top:70px; width: 28rem;">
                <div class="card-body p-4">
                        <h4 class="card-title text-center">Register</h4>
                        <hr>
                        <form action="{{ url('/regis') }}" id="regist" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="nama"> <b>Nama</b></label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
                            <br>
                            <label for="email"> <b>Email</b></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Alamat E-mail" required>
                            <br>
                            <label for="no_hp"> <b>Nomor Handphone</b></label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone" required>
                            <br>
                            <label for="password"> <b>Kata Sandi</b></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda" required>
                            <br>
                            <label for="password2"> <b>Komfirmasi Kata Sandi</b></label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi Anda" required>
                            <br>
                            <br>
                            <center><button type="submit" name="daftar" class="btn btn-primary" style="width: 140px;">Daftar</button></center>
                            <br>
                            <p class="text-center">Anda sudah punya akun? <a href="{{ url('/login') }}">Login</a></p>
                        </form>       
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection