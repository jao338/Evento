@extends('layouts/main')

@section('title', 'Curso de laravel 8 - Produtos')

@section('content')

    <h1>Produtos</h1>

    @if ($busca != '')
        <p>O usuário está buscando por: {{ $busca }}</p>
    @endif

@endsection
