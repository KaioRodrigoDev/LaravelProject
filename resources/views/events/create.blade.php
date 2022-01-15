@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

<h1>Crie o seu evento</h1>

<form action="/events" method="POST">
  @csrf
  <div class="form-group">
    <label for="tite">Evento: </label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento">
  </div>
  <div class="form-group">
    <label for="tite">Cidade: </label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Local do evento">
  </div>
  <div class="form-group">
    <label for="tite">O evento é privado ? </label>
    <select name="private" id="private" class="form-control">
      <option value="0">Não</option>
      <option value="1">Sim</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tite">Descrição </label>
    <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento ?"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" value="Criar Evento">
</form>

</div>
  

@endsection