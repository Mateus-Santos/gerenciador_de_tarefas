<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use App\Tipo_tarefa;
use App\User;

class TarefaController extends Controller
{

    public function index()
    {
        $tarefa = Tarefa::all();
        return view('list-tarefas', compact('tarefa'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        $tipo_tarefa = Tipo_tarefa::all();
        $user = User::all();
        return view('registrar-tarefas', compact('tipo_tarefa', 'user'));
    }

    public function store(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->titulo = $request->input("titulo");
        $tarefa->usuario_responsavel = $request->input("usuario_responsavel");
        $tarefa->privado = $request->input("privacidade");
        $tarefa->descricao = $request->input("descricao");
        $tarefa->tipo = $request->input("tipo");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclusao = $request->input("data_conclusao");
        $tarefa->save();
        return redirect()->route('tarefa.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Tarefa $tarefa)
    {
        $tipo_tarefa = Tipo_tarefa::all();
        $user = User::all();
        return view('edit-tarefa', compact('tarefa', 'tipo_tarefa', 'user'));
    }

    public function update(Request $request, Tarefa $tarefa)
    {

        $tarefa->titulo = $request->input("titulo");
        $tarefa->usuario_responsavel = $request->input("usuario_responsavel");
        $tarefa->privado = $request->input("privacidade");
        $tarefa->descricao = $request->input("descricao");
        $tarefa->tipo = $request->input("tipo");
        $tarefa->status = $request->input("status");
        $tarefa->data_conclusao = $request->input("data_conclusao");
        $tarefa->save();
        return redirect()->route('tarefa.index');
    }

    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefa.index');
    }
}
