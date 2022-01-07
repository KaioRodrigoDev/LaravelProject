@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Titulo h1</h1>

<img src="/img/banner.jpg" alt="Banner">

@for($i = 0; $i < count($arr); $i++)
<p>{{ $arr[$i] }} - {{$i + 1}}</p>
@endfor

@endsection
