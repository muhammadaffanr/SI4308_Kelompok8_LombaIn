@extends('layouts.default')
@section('content')
<div class="row mt-5 ">
    <h3 class="text-center mb-3">Edit Profile</h3>
    <form method="post" action="/update-patient/{{$patient->id}}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="inputEmail4">Nama Lomba</label>
        <input type="text" class="form-control" id="inputEmail4" name="lomba" placeholder="" readonly>
    </div>
        <div class="mb-3">
            <label for="vaccine_id" class="form-label"> Id</label>
            <input type="text" class="form-control" id="vaccine_id" name="id" value="{{ $vaccine->id }}" required  readonly>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Peserta</label>
            <input type="text" class="form-control" id="name" name="" value="{{$vaccine->name}}" required>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{$patient->nik}}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Kesan & Pesan</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{$patient->Alamat}}" required>
        </div>
        <div class="mb-3">
            <div class="row">
                <label for="image_ktp" class="form-label">KTP</label>
                <input type="file" name="image" class="form-control-file" value="{{$patient->img}}">
            </div>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">Asal Instansi Pendidikan</label>
            <input type="text" class="form-control" id="no_hp" name="Asal_Instansi_Pendidikan" value="{{$patient->Asal_Instansi_Pendidikan}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection