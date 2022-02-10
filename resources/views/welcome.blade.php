@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">

  <h1> Busque um evento</h1>
  <form action="/" mothod='GET'>
    <input type="text" id="search" name='search' class="form-control" placeholder = 'Procurar ...'>
  </form>

</div>
  
<div id="events-container" class="col-md-12">
  @if ($search)
      <h2>Buscando por: {{$search}}</h2>
  @else
  <h2>Proximos eventos</h2>
  @endif
  
  <p class="subtitle">Veja os eventos dos proximos dias</p>
  <div id="cards-container" class="row">
    @foreach($events as $event)

    <div class="card col-md-3">
      <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
      <div class="card-body">
        <p class='card-date'>{{$event->date->format('d/m/Y')}}</p>
        <h5 class="card-title">{{$event->title}}</h6>
        <p class="card-participants">{{count($event->users)}} participantes</p>
        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
      </div>
    </div>

    @endforeach
    @if (count($events) == 0 && $search)
      <p>Nenhum evento em relação a: {{$search}} !<a href="/">Ver todos</a></p>
    @elseif(count($events) == 0)
      <p>Não ha eventos disponiveis</p>
    @endif
  </div>
</div>
@endsection
