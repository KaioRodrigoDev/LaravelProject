@extends('layouts.main')

@section('title', 'product')

@section('content')

  @if($id != null)
    <p>Exibindo produto de ID{{$id}}</p>
  @endif

  @if($busca != '')

  <p>O usuario esta buscando por: {{$busca}}</p>

  @endif
  

@endsection