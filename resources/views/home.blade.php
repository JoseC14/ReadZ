@extends('index')
@section('homeativo','active')
@section('conteudo')
   
   <div class="historias">
    <div class="historias-row">
        @foreach ($historias as $historia)
      <div class="historia">
            <img class="history-image"src="{{url("/storage/$historia->imagem")}}">
            <h5>{{Str::limit($historia->titulo,20)}}</h5>
            <p>{{Str::limit($historia->sinopse,50)}}</p>
            <a href="{{route('site.show',$historia->id)}}" class="btn btn-primary">Ler História</a> 
      </div>
      
   @endforeach 
     
  </div>
  <div class="d-flex justify-content-center">
    {!! $historias->appends(['sort' => 'titulo'])->links() !!}
  </div>      
@endsection
 
@section('pesquisa')

        
<form>
  <input class="input-search" type="text"  placeholder="História" name="historia">
  <button class="button-search" type="submit">Pesquisar</button>
</form>
@endsection