{{-- collego il file show.scss per l'estetica di show.blade.php --}}
@vite('resources/scss/show.scss')

@extends('layouts.app')
@section('main-content')

    <body>
        <div class="container d-flex justify-content-center align-content-center gap-5 flex-wrap py-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $movies['title'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movies['original_title'] }}</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nazionalità: {{ $movies['nationality'] }}</li>
                        <li class="list-group-item">Data: {{ $movies['date'] }}</li>
                        <li class="list-group-item">Voto: {{ $movies['vote'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
@endsection
