@extends('layout.main')

@section('title', 'TOURISM')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
      <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                  <label for="title">Evento:</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>

            <div class="form-group">
                  <label for="title">Cidade:</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
            </div>

            <div class="form-group">
                  <label for="title">O evento é Privado? </label>
                  <select name="private" id="private" class="form-control">

                        <option value="0">Não</option>
                        <option value="1">Sim</option>

                  </select>
            </div>
            <div class="form-group">
                  <label for="title">Descrição:</label>
                  <textarea name="description" id="description" class="form-control" placeholder="O que vai ter? "></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="criar Evento">


      </form>
</div>
@endsection