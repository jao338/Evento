@extends('layouts/main')

@section('title', 'Curso de laravel 8 - Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

    <h1>Crie o seu evento</h1>

    <form action="/events" method="POST" enctype="multipart/form-data">
    
        @csrf

        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>


        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
        </div>

        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>

        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image" class="w-100">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="d-flex flags">
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Open Food"> Open food
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
        </div>

        <input type="submit" value="Criar evento" class="btn btn-primary">

    </form>

</div>

@endsection
