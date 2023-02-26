@extends('index')

@section('conteudo')
<div class="container text-center">
<h3>{{$capitulo->titulo}}</h3>
<div style="word-wrap: break-word;">
  {{$capitulo->conteudo}}
</div>
</div>
@endsection