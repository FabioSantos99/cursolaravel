
@extends('layout.main')

@section('title', 'TOURISM')

@section('content')

<h1>Alguno titulo</h1>


@if(1 > 3)
    <p>Condição é true1</p>
@else
    <p>Condição é false</p>
@endif

<p>{{$nome}}</p>
<p>{{$idade}}</p>

@if($nome == "Pedro")
    <p>O nome é pedro</p>

@elseif($nome == "Fabio")
    <p>O nome é {{$nome}} e ele tem {{$idade}}</p>

@else
    <p>Nome não encontrado</p>
@endif

@endsection