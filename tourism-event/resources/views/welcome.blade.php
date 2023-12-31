
@extends('layouts.main')

@section('title', 'TOURISM')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque Viagens</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure um evento">

    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)

    <h2>Buscando por: {{ $search }}</h2>

    @else 

    <h2>Proximas Viagens/Eventos</h2>
    <p class="subtitle">Veja os eventos nos proximos dias</p>


    @endif

    <div id="cards-container" class="">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                <p class="card-date">{{ date("d/m/y", strtotime($event->date))}}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
            </div>
         </div>
       @endforeach

       @if(count($events) === 0)
       <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a> </p>
       @elseif(count($events) == 0)
       <p>Não há eventos disponíveis</p>

       @endif
     </div>
</div>


@endsection