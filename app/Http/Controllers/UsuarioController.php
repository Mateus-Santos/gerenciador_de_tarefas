<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    
    public function index()
    {
        $usuario = User::all();
        return view('list-usuario', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrar-usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request->input('nome');
        $usuario->sexo = $request->input('sexo');
        $usuario->data_nascimento = $request->input('data_nascimento');
        $usuario->email = $request->input('email');
        $usuario->telefone = $request->input('telefone');
        $usuario->login = $request->input('login');
        $usuario->password = $request->input(bcrypt('password'));
        $usuario->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        return view('edit-usuario',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->nome = $request->input('nome');
        $usuario->sexo = $request->input('sexo');
        $usuario->data_nascimento = $request->input('data_nascimento');
        $usuario->email = $request->input('email');
        $usuario->telefone = $request->input('telefone');
        $usuario->login = $request->input('login');
        $usuario->password = $request->input('password');
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('list-usuario');
    }
}
