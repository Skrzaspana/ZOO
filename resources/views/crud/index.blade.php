@extends('layouts.app')
@section('content')  
<div id="animal" class="container mt-3 mb-5 text-light">
    <div class="row" style="margin-top: 100px;">
        <h1>Zwierzęta</h1>
    </div>
    @can('is-admin')
        <a href="{{ route('crud.create') }}" class="btn btn-sm btn-success">Dodaj nowe zwierze</a>
    @endcan
    @if (Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
    @endif
    <table class="table text-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imie</th>
                <th scope="col">Wiek</th>
                <th scope="col">Gatunek</th>
                <th scope="col">Zdjęcie</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($animals as $animal)
                <tr>
                    <th scope="row" href="{{ route('crud.show', $animal) }}" class="link text-light">{{ $animal->id }}</th>
                    <td>{{ $animal->imie }}</td>
                    <td>{{ $animal->wiek }}</td>
                    <td>{{ $animal->type->type }} </td>
                    <td>
                        <img width="100" src="/img/{{ $animal->obrazek }}" alt="{{ $animal->imie }}" srcset="">    
                    </td>
                    @can('is-admin', $animal)
                        <td>
                            <a href="{{ route('crud.edit', $animal) }}" class="btn btn-sm btn-warning">Edytuj zwierzę</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('crud.destroy', $animal) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="confirm('Czy na pewno chcesz usunać to zwierze?');">Usuń zwierze</button>
                            </form>
                        </td>
                    @endcan
                    </th>
                </tr>
            @empty
                <tr>
                    <th scope="row" colspan="6">Brak zwierząt</th>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
  @endsection