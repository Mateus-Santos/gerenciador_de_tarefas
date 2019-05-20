@extends('layout.base')

@section('body')
<div class="registrar">
<form action = "{{route('tarefa.update', $tarefa)}}" method = "POST">
@csrf
@method('PUT')
<br>
        <label for="titulo">Nome da titulo:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$tarefa->titulo}}">
        <br>
            <label for="privacidade">Escolha a privacidade:</label>
            <select class="form-control" id="privacidade" name="privacidade">
                <option value=1>Privado</option>
                <option value=0>Público</option>
            </select>
        <br>
        <label for="descricao">Descrição:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="{{$tarefa->descricao}}">
        <br>
        
        <label for="tipo">Escolha o tipo:</label>
            <select class="form-control" id="tipo" name="tipo">
            @foreach($tipo_tarefa as $tipo)
                <option value={{$tipo->id}}>{{$tipo->nome}}</option>
            @endforeach
            </select>

        <br>
        <label class="status" for="status" >Escreva o status:</label>
        <input type="text" class="form-control" id="status" name="status" value="{{$tarefa->descricao}}">
        <br>
        <label class="data_conclusao" for="data_conclusao">Nome da data de conclusão:</label>
        <input type="text" class="form-control" id="data_conclusao" name="data_conclusao" value="{{$tarefa->descricao}}">
        <br>
        <label for="usuario_responsavel">Escolha o responsavel:</label>
        <select class="form-control" id="usuario_responsavel" name="usuario_responsavel">
            @foreach($user as $us)
                <option value={{$us->id}}>{{$us->name}}</option>
            @endforeach
            </select>
        <br>
    <Button type="submit" class="btn btn-primary">PRONTO!</button>
</form>
</div>
