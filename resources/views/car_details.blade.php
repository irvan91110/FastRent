@extends('layout')
  
@section('content')
      <div class="container text-secondary" style="margin-top: 30px; ">
        <h5>Detail Mobil</h5>
      </div>
      
      <!--Carousel-->
      <div class="container">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-lg-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src="img/ayla-2018-png-6.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/ayla-2018-png-6.webp" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/ayla-2018-png-6.webp" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class="card" style="width: 18rem; offset: 10;">
                <img src="img/ayla-2018-png-6.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Daihatsu Ayla</h5>
                  <p class="card-text">Ayla dengan harga ergonomis yang berkapasitas 5 Orang, siap untuk   menemani perjalananmu</p>
                  <a href="#" class="btn btn-primary">Rental</a>
                </div>
              </div>
          </div>
        </div>
        
      
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   

      @endsection
