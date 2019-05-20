@extends('layout.base', ["current"=>"tipo_tarefa"])

@section('body')

<div class="listar">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tipo_tarefa as $tp)
    <tr>
      <th scope="row">{{$tp->id}}</th>
      <td>{{$tp->nome}}</td>
      <td>
      <form action = "{{route('tipo_tarefa.destroy', $tp)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tipo_tarefa.edit', $tp)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>