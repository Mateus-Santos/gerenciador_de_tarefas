@extends('layout.base', ["current"=>"tipo_tarefas"])

@section('body')

<div class="registrar">
<form action = "{{route('tipo_tarefa.store')}}" method = "POST">
@csrf
        <br>
        <label for="nome">Nome do tipo da tarefa:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Exemplo: Lavar pratos">
        <br>
        <br>
    <div class="botao">
    <button type="submit" class="btn btn-success">PRONTO!</button>
    </div>
</form>
</div>
