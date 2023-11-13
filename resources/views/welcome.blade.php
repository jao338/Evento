@extends('layouts/main')

@section('title', 'Curso de laravel 8 - Home')

@section('content')

    <p>Home</p>

    <div class="row">
        @foreach ($events as $event)
            <p>{{ $event->title }} - {{ $event->description }}</p>
        @endforeach
    </div>

@endsection
