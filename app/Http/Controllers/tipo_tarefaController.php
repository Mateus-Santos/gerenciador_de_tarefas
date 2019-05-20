<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_tarefa;

class Tipo_tarefaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tipo_tarefa = Tipo_tarefa::all();
        return view('list-tipo_tarefa', compact('tipo_tarefa'));
    }

    public function create()
    {
        return view('registrar-tipo_tarefa');
    }

    public function store(Request $request)
    {
        $tipo_tarefa = new Tipo_tarefa();
        $tipo_tarefa->nome = $request->input("nome");
        $tipo_tarefa->save();
        return redirect()->route('tipo_tarefa.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Tipo_tarefa $tipo_tarefa)
    {
        return view('edit-tipo_tarefa', compact('tipo_tarefa'));
    }

    public function update(Request $request, Tipo_tarefa $tipo_tarefa)
    {
        $tipo_tarefa->nome = $request->input("nome");
        $tipo_tarefa->save();
        return redirect()->route('tipo_tarefa.index');
    }

    public function destroy(Tipo_tarefa $tipo_tarefa)
    {
        $tipo_tarefa->delete();
        return redirect()->route('tipo_tarefa.index');
    }
}
