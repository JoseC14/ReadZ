@extends('index')
@section('historiaativo','active')
@section('conteudo')
<div class="form-history">
    <form method="post" action="{{route('site.store')}}" enctype="multipart/form-data">      
        @csrf  
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="mb-3">
   <p>Título</p>
    <input type="text" class="form-input"   name="titulo">
    </div>
    <div class="mb-3">
      <p>Capa</p>
      <input type="file" class="form-input"  name="capa">
    </div>
    <div class="mb-3">
        <p>Sinopse</p>
        <textarea class="form-input" placeholder="500 caracteres..." type="text"  rows="5" cols="50" maxlength =500 name="sinopse"></textarea>
      </div>
    <button type="submit" class="form-btn">Criar</button>
  </form>
</div>
    
@endsection