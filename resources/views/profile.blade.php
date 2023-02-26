@extends('index')

@section('conteudo')
<div class="container text-center">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Usuário</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{auth()->user()->name}}</td>
      </tr>
      <tr>
        <th scope="row">Email</th>
      </tr>
      <tr>
        <td>{{auth()->user()->email}}</td>
      </tr>
    </tbody>
  </table>
  <form method="get" action="{{route('site.logout')}}">
    <button type="submit" class="btn btn-danger">Logout</button>
  </form>
</div> 
    
@endsection