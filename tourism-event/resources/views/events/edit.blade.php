@extends('layout.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
      <h1>Editando: {{ $event->title }}</h1>
      <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                  <label for="image">Imagem do Evento:</label>
                  <input type="file" id="image" name="image" class="form-control-file">
                  <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            </div>




            <div class="form-group">
                  <label for="title">Evento:</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{ $event->title }}">
            </div>

            <div class="form-group">
                  <label for="date">Data do evento:</label>
                  <input type="date" class="form-control" id="date" name="date" value="{{date('Y-m-d', strtotime($event->date))}}">
            </div>

            <div class="form-group">
                  <label for="title">Cidade:</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade" value ="{{ $event->city}}">
            </div>

            <div class="form-group">
                  <label for="title">O evento é Privado? </label>
                  <select name="private" id="private" class="form-control">

                        <option value="0">Não</option>
                        <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>

                  </select>
            </div>
            <div class="form-group">
                  <label for="title">Descrição:</label>
                  <textarea name="description" id="description" class="form-control" placeholder="O que vai ter? ">{{ $event->description }}</textarea>
            </div>

            <div class="form-group">
                  <label for="title">Adicione itens de infraestrutura:</label>
                  <div class="form-group">
                        <input type="checkbox" name="items[]" value="Passagens"> Passagens
                  </div>

                  <div class="form-group">
                        <input type="checkbox" name="items[]" value="Host"> Hospedagens
                  </div>

                  <div class="form-group">
                        <input type="checkbox" name="items[]" value="Brindes"> Brindes
                  </div>

                  <div class="form-group">
                        <input type="checkbox" name="items[]" value="food"> Comida
                  </div>
                 
            </div>

            <input type="submit" class="btn btn-primary" value="Editar Viagem">


      </form>
</div>
@endsection