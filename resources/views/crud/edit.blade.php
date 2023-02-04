@extends('layouts.app')
@section('content')
    <div id="animal" class="container mt-3 mt-100 text-light">
        <div class="row">
            <h1>Edytuj zwierze: {{ $animal->imie }}</h1>
        </div>
        <div class="row col-md-6">
            <form method="POST" action="{{ route('crud.update', $animal) }}">
                @method('PUT')
                @csrf
                <div class="form-group mb-2">
                    <label for="type">Typ</label>
                    <select id="type" name="type" class="form-control @error('id_type') is-invalid @enderror">
                        @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="imie">Imie</label>
                    <input id="imie" name="imie" type="text" class="form-control @error('imie') is-invalid @enderror"
                        value="{{ $animal->imie }}">
                    @error('imie')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="wiek">Wiek</label>
                    <textarea id="wiek" name="wiek" type="text"
                        class="form-control @error('wiek') is-invalid @enderror" value="{{ $animal->wiek }}"> {{ $animal->wiek }} </textarea>
                    @error('wiek')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="obrazek">Nazwa obrazka</label>
                    <input id="obrazek" name="obrazek" type="text"
                        class="form-control @error('obrazek') is-invalid @enderror" value="{{ $animal->obrazek }}">
                    @error('obrazek')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <input type="submit" value="Zapisz" class="btn btn-primary">
            </form>
        </div>

    </div>
@endsection
