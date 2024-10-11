<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all(); //all traz todas as informações da tabela
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nome.required'=>'É necessário preencher o nome do cliente!',
            'CPF.required'=>'É necessário preencher o CPF do cliente!',
            'CPF.min'=>'É necessário preencher um mínimo de 11 caracteres no CPF!',
            'CPF.max'=>'O CPF pode ter no máximo 15 caracteres!',
            'email.required'=>'É necessário preencher o e-mail!'
        ];
        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'nome' => 'required|string|max:50',
            'CPF' => 'required|string|max:15|min:11',
            'email' => 'required|string|max:70',
            'telefone' => 'string|max:50',            
        ],$messages);

        Cliente::create($request->all());//cria e manda as coisas pro banco

        return redirect() -> route('clientes.index')->with('success', 'Cliente criado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required'=>'É necessário preencher o nome do cliente!',
            'CPF.required'=>'É necessário preencher o CPF do cliente!',
            'CPF.min'=>'É necessário preencher um mínimo de 11 caracteres no CPF!',
            'CPF.max'=>'O CPF pode ter no máximo 15 caracteres!',
            'email.required'=>'É necessário preencher o e-mail!'
        ];
        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'nome' => 'required|string|max:50',
            'CPF' => 'required|string|max:15|min:11',
            'email' => 'required|string|max:70',
            'telefone' => 'string|max:50',            
        ],$messages);

        $cliente = Cliente::findOrFail($id);

        $cliente->nome = $request->input('nome');
        $cliente->CPF = $request->input('CPF');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');

        $cliente->save();

        return redirect()->route('clientes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente -> delete();
        return redirect()->route('clientes.index');
    }
}
