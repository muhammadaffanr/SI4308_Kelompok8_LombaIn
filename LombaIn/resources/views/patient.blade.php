@extends('layouts.default')
@section('content')

@if($patients == '[]')
<div class="row mt-5 text-center">
    <p class="text-muted">There is no data....</p>
    <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-primary" href="/choose-vaccine" role="button">Feedback Lomba</a>
    </div>
</div>

@else
<div class="row mt-5">
    <h3 class="text-center">List Lomba</h3>
    <div class="d-grid gap-2 d-md-block mb-3">
        <a class="btn btn-primary" href="/choose-vaccine" role="button">Feedback Lomba</a>
    </div>
    <table class="table table-light mt-2 table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lomba</th>
                <th scope="col">NIK</th>
                <th scope="col">Pesan & Kesan</th>
                <th scope="col">Asal Instansi Pendidikan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $index=>$patient)
            <tr>
                <th scope="row">{{$index+1}}</th>
                <td>{{$patient->lomba}}</td>
                <td>{{$patient->nik}}</td>
                <td>{{$patient->Alamat}}</td>
                <td>{{$patient->Asal_Instansi_Pendidikan}}</td>
                <td>
                    <form action="/delete-patient/{{$patient->id}}" method="post">
                        @csrf
                        @method('delete')
                        <a href="/edit-patient/{{$patient->id}}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection