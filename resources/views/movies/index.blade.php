{{-- collego il file index.scss per l'estetica di index.blade.php --}}
@vite('resources/scss/index.scss')

@extends('layouts.app')

@section('page-title', 'Movie')

@section('main-content')

    <body>
        <div class="container d-flex justify-content-center align-content-center gap-5 flex-wrap py-5">
            @foreach ($movies as $movieItem)
                <div class="card">
                    <a href="{{ route('movies.show', $movieItem['id']) }}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $movieItem['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movieItem['original_title'] }}</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nazionalità: {{ $movieItem['nationality'] }}</li>
                                <li class="list-group-item">Data: {{ $movieItem['date'] }}</li>
                                <li class="list-group-item">Voto: {{ $movieItem['vote'] }}</li>
                            </ul>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </body>
@endsection
