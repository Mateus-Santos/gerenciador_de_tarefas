@extends('layout.base', ["current"=>"user"])

@section('body')

<div class="listar">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data_nascimento</th>
      <th scope="col">Telefone</th>
      <th scope="col">Login</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach($user as $us)
    <tr>
      <th scope="row">{{$us->id}}</th>
      <td>{{$us->name}}</td>
      <td>{{$us->sexo}}</td>
      <td>{{$us->data_nascimento}}</td>
      <td>{{$us->telefone}}</td>
      <td>{{$us->login}}</td>  
    </tr>
  </tbody>
@endforeach
</table>
</div>