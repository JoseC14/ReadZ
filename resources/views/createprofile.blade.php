@extends('index')

@section('conteudo')
<div class="container text-center">
    <form method="post" action="{{route('site.storeprofile')}}">      
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
    <label for="exampleInputEmail1" class="form-label">Usuário</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Endereço de e-mail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirmar Senha</label>
        <input type="password" class="form-control" name="samepassword" id="exampleInputPassword1">
      </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
    
@endsection