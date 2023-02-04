@extends('layouts.app')
@section('gatunek', 'Film: ' . $animal->gatunek . ' - ')
@section('content')
    <div id="animal" class="container mt-3 mt-100 text-light">
        <div class="jumbotron">
            <h1 class="display-4">{{ $animal->gatunek }}</h1>

            <div class="row">
                <table class="table table-bordered col-md-6" style="width: 33%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Typ</th>
                            <td>{{ $animal->id_type }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Gatunek</th>
                            <td>{{ $animal->gatunek }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Opis</th>
                            <td>{{ $animal->opis }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
