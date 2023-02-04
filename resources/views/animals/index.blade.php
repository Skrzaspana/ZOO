@extends('layouts.app')
@section('content')  
    <div align="center" class="p-3 mb-1 text-white" style="background-color: #132A0A;">
    <div id="carouselExampleCaptions" class="carousel slide w-75" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/tiger.jpg" class="d-block w-100" alt="tiger">
            <div class="carousel-caption d-none d-md-block text-white">
              <h5><span style="font-family: Impact">Wiele gatunków zwierząt z całego świata!</span></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/lemur.jpg" class="d-block w-100" alt="lemur">
            <div class="carousel-caption d-none d-md-block">
              <h5><span style="font-family: Impact">Pokochaj ich różnorodność!</span></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/flaming.jpg" class="d-block w-100" alt="flaming">
            <div class="carousel-caption d-none d-md-block">
              <h5><span style="font-family: Impact">Jesteśmy otwarci codziennie!</span></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/papuga.jpg" class="d-block w-100" alt="papuga">
            <div class="carousel-caption d-none d-md-block">
              <h5><span style="font-family: Impact">Otwarcie papugarni już niedługo!</span></h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
</br>
      <p class="h1 text-center text-white" ><span style="font-family: Impact">Nasi Podopieczni</span></p>

      <div class="container">



       <div class="cards d-flex row mt-9 ">
            @forelse ($animals as $animal)
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="card bg-dark text-light">     
                      <img src="{{ asset('img/' . $animal->zdjecie) }}?text=Image cap" class="card-img-top card-img-height" alt="{{ $animal->type }}" />
                        <div class="card-body">
                            <h5 class="card-title" align="center">{{ $animal->type }}</h5>
                            <p class="card-text">
                                {{ Str::words($animal->opis, 10, '...') }}
                            </p>  
                            <a href="{{ route('animals.show', $animal) }}" class="btn btn-sm btn-outline-danger">Zobacz więcej!</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div> 
    </div>
  @endsection