@extends('index')

@section('conteudo')
<div class="container text-center">
    <div class="row">
      <div class="col">
        <img src="{{$historia->imagem}}">
      </div>
      <div class="col">
        <h3>{{$historia->titulo}}</h3>
        <textarea cols="50" rows="10" readonly>
            {{$historia->sinopse}}
        </textarea>
      </div>
    </div>
</div>
<div class="container text-center">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Capítulos</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($capitulos as $capitulo)
      <tr>
   
        <td><a style="text-decoration: none; color:black" href="{{route('site.chapter',$capitulo->id)}}">{{$capitulo->titulo}}</a></td>    
      
      </tr>
      @endforeach
    </tbody>
  </table>
</div> 
</div>
@endsection
