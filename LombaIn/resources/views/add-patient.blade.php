@extends('layouts.default')
@section('content')
<section>
<div class="container  mt-5" style="align-items:center">
<div class="row mt-5 ">
    <h3 class="text-center mb-3">Feedback dari {{$vaccine->name}}</h3>
    <form method="POST" action="/register-patient" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="vaccine_id" class="form-label">Id</label>
            <input type="text" class="form-control" id="vaccine_id" name="id" value="{{$vaccine->id}}" required readonly>
        </div>
        <div class="mb-3">
            <label for="vaccine_id" class="form-label">Nama Lomba</label>
            <input type="text" class="form-control" id="vaccine_id" name="lomba" value="{{$vaccine->lomba}}" required readonly>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">Nomor Identitas</label>
            <input type="text" class="form-control" id="nik" name="nik" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Asal Instansi Pendidikan</label>
            <input type="text" class="form-control" id="alamat" name="Asal_Instansi_Pendidikan" value="{{$vaccine->Asal_Instansi_Pendidikan}}" required readonly>
        </div>
        
        <div class="mb-3">
            <label for="no_hp" class="form-label">Kesan & Pesan</label>
            <input type="text" class="form-control" id="no_hp" name="Alamat"required>
        </div>
        <div class="mb-3">
            <div class="row">
                <label for="image_ktp" class="form-label">Kartu Identitas</label>
                <input type="file" name="image" class="form-control-file" required>
            </div>
            <br>
        {{-- <div class="mb-3">
                <label for="deskripsi" class="form-label"><b>Kesan Lomba</b></label>
                <textarea class="form-control" id="kesan" name="kesan" rows="3" required></textarea>
        </div>
        <div class="mb-3">
                <label for="deskripsi" class="form-label"><b>Pesan untuk Penyelenggara Lomba</b></label>
                <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
        </div> --}}
        <button type="submit" class="btn btn-primary">Sumbit</button>
    </form>
</div>
</section>
@endsection