@extends('index')
@section('entrarativo','active')
@section('conteudo')
@if ($errors->any())
<div class="alert">
    <ul class="list-errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="form form-create">
    <form method="post" action="{{route('site.storeprofile')}}">      
        @csrf  
   
    <p>Usuário</p>
    <input class="form-input" name="user" class="form-input">
    
    <p>Endereço de E-mail</p>
    <input class="form-input" name="email" class="form-input">
    
    <p>Senha</p>
    <input type="password"  name="password" class="form-input">
 
    <p>Confirmar Senha</p>
    <input type="password" name="samepassword" class="form-input">
    <p></p>
    <button type="submit" class="form-btn">Cadastrar</button>
  </form>
</div>
    
@endsection