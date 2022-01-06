@extends('layouts.default')
@section('content')


<h3 class="text-center mt-5 mb-5">List Lomba</h3>
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($vaccines as $vaccine)
    <div class="col">
        <div class="card mb-5 h-100">
            <img src="img/vaccine/{{$vaccine->image}}" class="card-img-top" height="300" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$vaccine->lomba}}</h4>
                <p class="card-text mb-3 text-muted">Pendaftar : {{$vaccine->name}}</p>
                <p class="card-text">Tingkat Pendidikan : {{$vaccine->Tingkat_Pendidikan}}</p>
                <p class="card-text">Asal Instansi Pendidikan : {{$vaccine->Asal_Instansi_Pendidikan}}</p>
            </div>
            <div class="card-footer">
                    <div class="d-grid gap-2">
                        <a href="/add-patient/{{$vaccine->id}}" class="btn btn-primary">Feedback</a>
                    </div>
                </div>
        </div>
    </div>
    @endforeach
</div>
@endsection