@extends('index')
@section('loginativo', 'active')
@section('conteudo')

   @if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  @if (session('danger'))
  <div class="alert">
    <ul>
    {{session('danger')}}
    </ul>
  </div>
      
  @endif
<div class="form-login">
    <form method="post" action="{{route('site.auth')}}">      
        @csrf  
      
    <div>
      <p>Endereço de E-mail</p>
      <input type="email" class="form-input"  name="email">
    </div>
    <div>
      <p>Senha</p>
      <input type="password" class="form-input" name="password">
    </div>
    <button type="submit" class="form-btn">Entrar</button>
  </form>
</div>
    <p>
        <a  href="{{route('site.createprofile')}}" id="signup">Não tem login? Cadastre-se</a>
    </p>

@endsection
