@extends('layouts.default')
@section('content')
<section>
    <div class="container  mt-5" style="align-items:center">
        <h5 class="mx-auto text-center " style="font-weight:bold">Pendaftaran Lomba</h5>
        <form action="{{ url('/store') }}" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputEmail4">Nama Lomba</label>
                <input type="text" class="form-control" id="inputEmail4" name="lomba" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="inputEmail4">Nama Peserta</label>
                <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="inputEmail4">Tingkat Pendidikan</label>
                <input type="text" class="form-control" id="inputEmail4" name="Tingkat_Pendidikan" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="inputEmail4">Asal Instansi Pendidikan</label>
                <input type="text" class="form-control" id="inputEmail4" name="Asal_Instansi_Pendidikan" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Alamat"
                    placeholder=""></textarea>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputZip">Kartu Pelajar</label>
                    <input type="file" class="form-control" id="inputstock" name="image">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</section>
@endsection