@extends('index')
@section('perfilativo','active')
@section('conteudo')
<div class="profile" >
  <div class="profile-data">
    <p>Usuário</p>
    <p>{{auth()->user()->name}}</p>
    <p>E-mail</p>
    <p>{{auth()->user()->email}}</p>
  </div>
     <div class="btns">
      <form method="get" action="{{route('site.logout')}}">
      <button type="submit" class="btn-logout">Logout</button>
      </form>
  
      <a href="{{route('site.editprofile',auth()->user()->id)}}"> <button  type="submit" class="btn-alterar">Alterar Usuário</button></a>
    </div>
 
</div> 
    
@endsection