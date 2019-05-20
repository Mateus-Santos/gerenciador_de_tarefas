@extends('layout.base', ["current"=>"tarefas"])

@section('body')

<div class="listar">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Usuario responsavel</th>
      <th scope="col">Privacidade</th>
      <th scope="col">Descricao</th>
      <th scope="col">Tipo</th>
      <th scope="col">Status</th>
      <th scope="col">Data conclusao</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tarefa as $tare)
    <tr>
      <th scope="row">{{$tare->id}}</th>
      <td>{{$tare->titulo}}</td>
      <td>{{$tare->usuario_responsavel}}</td>
      <td>{{$tare->privado}}</td>
      <td>{{$tare->descricao}}</td>
      <td>{{$tare->tipo}}</td>
      <td>{{$tare->status}}</td>
      <td>{{$tare->data_conclusao}}</td>
      <td>
      <form action = "{{route('tarefa.destroy', $tare)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tarefa.edit', $tare)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form> 
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>