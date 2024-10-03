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
        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'nome' => 'required|string|max:50',
            'CPF' => 'required|string|max:15',
            'email' => 'required|string|max:70',
            'telefone' => 'string|max:50',            
        ]);

        Cliente::create($request->all());//cria e manda as coisas pro banco

        return redirect() -> route('clientes.index')->with('success', 'Cliente criado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
