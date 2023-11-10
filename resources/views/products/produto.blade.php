@extends('layouts/main')

@section('title', 'Curso de laravel 8 - Produto')

@section('content')

    @if ($id != null)
        <p>Exibindo o produto {{ $id }}</p>
    @endif

@endsection