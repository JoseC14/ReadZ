@extends('index')
@section('conteudo')
   
   <div class="container text-center">
    <div class="row">
        @foreach ($historias as $historia)
      <div class="col">
         <div class="card" style="width: 18rem; margin:20px;background-color:#585856;color:white">
            <img src="{{$historia->imagem}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{Str::limit($historia->titulo,20)}}</h5>
            <p class="card-text">{{Str::limit($historia->sinopse,20)}}</p>
            <a href="{{route('site.show',$historia->id)}}" class="btn btn-primary">Ler História</a>
            </div>
            </div>
      </div>
      
   @endforeach 
     
  </div>
  <div class="d-flex justify-content-center">
    {!! $historias->appends(['sort' => 'titulo'])->links() !!}
  </div>      
@endsection
 
@section('pesquisa')

<form class="d-flex" role="search" style="margin-left: 650px">
    <input class="form-control me-2" type="search" placeholder="História" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
  </form>
@endsection