@extends('layouts.default')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LombaIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <style 
    scroll behavior : smooth;>

    </style>
    @if(session()->has('status'))
      </div><div class="alert alert-success alert-dismissible fade show" role="alert">
        Berhasil Login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
      <center><div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 1250px;height:700px; margin-top:1cm;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div></center>
      <div class="container-fluid">
      <section id="Program">
        <div class="jumbotron" style="margin-top: 100px; margin-left:50px">
          <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="/img/4.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">National Business Case Competition</h4>
                  <p class="card-text">In a case competition, participants strive to develop the best solution to a business or education-related case 
                    study within an allocated time frame, typically with teams of two or more individuals pitted against each other in a head-to-head or broader relative ranking. Teams deliver presentations for judges and, while competitions vary in composition, 
                    a standard format and purpose exists. In terms of cumulative number of participants  
                  </p>
                    <div class="card text-right" style="width: 12rem;">
                      <a href="{{ url('/welcome') }}" class="btn btn-outline-dark">Read Detail</a>
                      <a href="{{ url('/create') }}" class="btn btn-outline-primary">Daftar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="jumbotron" style="margin-top: 100px; margin-left:50px">
        <div class="card mb-3" style="max-width: 1000px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="/img/5.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h4 class="card-title">LOMBA INOVASI TEKNOLOGI LINGKUNGAN</h4>
                <p class="card-text">sub dari ENVIRONATION merupakan ajang adu pengetahuan, 
                  inovasi dan karya yang bertema lingkungan yang diharapkan dapat mencetak banyak generasi muda untuk perlindungan dan
                   perbaikan lingkungan.  
                </p>
                <div class="card text-right" style="width: 12rem;">
                  <a href="{{ url('/welcome') }}" class="btn btn-outline-dark">Read Detail</a>
                  <a href="{{ url('/create') }}" class="btn btn-outline-primary">Daftar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection