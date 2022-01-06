@extends('layouts.default')
@section('content')

    @if(!App\Models\vaksin::exists())
    <div class="row mt-5 text-center">
        <p class="text-muted">There is no data....</p>
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-primary" href="{{ url('create') }}" role="button">Add Vaccine</a>
        </div>
    </div>
    @else
    <section>
        <div class="container mt-4">
            <div class="">
                <div class="">
                    <a href="{{ url('create') }}" class="btn btn-primary">Daftar Lomba</a>
                </div>
                <div class="container-fluid pt-5 pb-5 bg-light">
                <div class="container text-center">
                  <h2 class="display-3" id="benefit">List Lomba</h2>
              
                  <div class="row pt-4 gx-4 gy-4">
                    <div class="col-md-4">
                      <div class="card crop-img">
                        <img
                          src="https://img.okezone.com/content/2017/08/19/15/1758860/pemerintah-godok-roadmap-alat-transportasi-rendah-emisi-dari-20-km-liter-hingga-nihil-BoPLCNpdnN.jpg"
                          class="card-img-top"
                          width="200"
                          height="200"
                        />
                        <div class="card-body">
                          <h5 class="card-title">Tidak Menghasilkan Emisi dan Ramah Lingkungan</h5>
                          <p class="card-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                            odit atque nam animi dolores itaque.
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card crop-img">
                        <img
                          src="http://imgcdnblog.carvaganza.com/wp-content/uploads/2020/12/Hyundai-Ioniq-EV-Grab-3.jpg"
                          class="card-img-top"
                          width="200"
                          height="200"
                        />
                        <div class="card-body">
                          <h5 class="card-title">Perawatannya yang Mudah dan Simpel</h5>
                          <p class="card-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                            odit atque nam animi dolores itaque.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card crop-img">
                        <img
                          src="https://statik.tempo.co/data/2019/12/16/id_898262/898262_720.jpg"
                          class="card-img-top"
                          width="200"
                          height="200"
                        />
                        <div class="card-body">
                          <h5 class="card-title">Suara Mobil dihasilkan yang Tidak Bising</h5>
                          <p class="card-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                            odit atque nam animi dolores itaque.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card crop-img">
                        <img
                          src="https://51ststatetavern.com/wp-content/uploads/2021/05/bersihkan-filter.jpg"
                          class="card-img-top"
                          width="200"
                          height="200"
                        />
                        <div class="card-body">
                          <h5 class="card-title">Harganya Perwatan Yang Tidak Menguras Kantong</h5>
                          <p class="card-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                            odit atque nam animi dolores itaque.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card crop-img">
                        <img
                          src="https://cdn1-production-images-kly.akamaized.net/aIJ2ggJLtNr0gc3KDViGOgpM4iw=/1280x720/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2287513/original/001816900_1532240503-Tesla_Roadster.jpg"
                          class="card-img-top"
                          width="200"
                          height="200"
                        />
                        <div class="card-body">
                          <h5 class="card-title">Memiliki akselerasi mobil yang lebih cepat</h5>
                          <p class="card-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                            odit atque nam animi dolores itaque.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card crop-img">
                        <img
                          src="https://images.bisnis-cdn.com/thumb/posts/2020/11/27/1323540/tesla.jpg?w=744&h=465"
                          class="card-img-top"
                          width="200"
                          height="200"
                        />
                        <div class="card-body">
                          <h5 class="card-title">Hanya Memerlukan isi baterai dalam segi bahan bakarnya</h5>
                          <p class="card-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis
                            odit atque nam animi dolores itaque.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    @endif

@endsection