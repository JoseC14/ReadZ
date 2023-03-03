@extends('index')

@section('conteudo')
<div >
<form class="form-edit" action="{{route('site.profiledit',$user->id)}}" method="post">
    @csrf
<div class="mb-3">
    <p>Usuário</p>
    <input type="text" value="{{$user->name}}"class="form-input"  name="user">
</div>
<p></p>
<button  type="submit" class="btn-alterar">Alterar</button>
</form>
</div>
@endsection