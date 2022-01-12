@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">

  <h1> Busque um evento</h1>
  <form action="">
    <input type="text" id="search" class="form-control" placeholder = 'Procurar ...'>
  </form>

</div>
  
<div id="event-container" class="col-md-12">
  <h2>Proximos eventos</h2>
  <p>Veja os eventos dos proximos dias</p>
  <div id="cards-container" class="row">
    @foreach($events as $event)

    <div class="card col-md-3">
      <img src="/img/event_placeholder.jpg" alt="{{$event->title}}">
      <div class="card-body">
        <p class='card-date'>02/06/2003</p>
        <h5 class="card-title">{{$event->title}}</h6>
        <p class="card-participants">X participantes</p>
        <a href="#" class="btn btn-primary">Saber mais</a>
      </div>
    </div>

    @endforeach
  </div>
</div>
@endsection
