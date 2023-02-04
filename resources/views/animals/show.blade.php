@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @forelse ($animals as $animal)
                <div class="col">
                    <div class="p-3 border bg-green">
                        <p class="text-white">Imie: {{ $animal->imie }}</p>
                        <p class="text-white">Wiek: {{ $animal->wiek }}</p>
                        <img src="{{ asset('img/' . $animal->obrazek) }}?text=Image cap" class="card-img-top card-img-height"
                            alt="{{$animal->obrazek}}" />
                    </div>
                </div>
                
            @empty
                Brak zwierząt
            @endforelse

        </div>
    </div>
@endsection
