@extends('layouts/main')

@section('title', 'Curso de laravel 8 - Home')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>

    </div>

    <div class="col-md-12" id="events-container">
        <h2>Próximos eventos</h2>

        <p class="subtitle">Veja os eventos dos próximos dias</p>

        <div id="cards-container" class="row margin-L-0 margin-R-0">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">

                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        
                    </div>

                </div>
            @endforeach
            @if (count($events) == 0)
                <p>Não há eventos disponíveis no momento</p>
            @endif
        </div>
    </div>

@endsection
