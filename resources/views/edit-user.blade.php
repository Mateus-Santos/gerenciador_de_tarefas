@extends('layout.base', ["current"=>"tipo_tarefas"])

@section('body')

<div class="registrar">
<form action = "{{route('user.update', $user)}}" method = "POST">
@csrf
@method('PUT')
        <br>
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email">
        <label for="sexo">Sexo:</label>
        <select class="form-control" id="sexo" name="sexo">
                <option></option>
                <option>Feminino</option>
                <option>Masculino</option>
        </select>
        <label for="data_nascimento">Data nascimento:</label>
        <input type="text" class="form-control" id="data_nascimento" name="data_nascimento">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone">
        <button type="submit" class="btn btn-success">PRONTO!</button>
        </div>
</form>
</div>
