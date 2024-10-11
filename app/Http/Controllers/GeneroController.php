<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genero;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = Genero::all(); //all traz todas as informações da tabela
        return view('generos.index', compact('generos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('generos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'descricao.required'=>'É necessário preencher a descrição!'
        ];

        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'descricao' => 'required|string|max:255|min:1'
        ],$messages);

        Genero::create($request->all());//cria e manda as coisas pro banco

        return redirect() -> route('generos.index')->with('success', 'Gênero criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genero = Genero::findOrFail($id);
        return view('generos.show',compact('genero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genero = Genero::findOrFail($id);
        return view('generos.edit', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'descricao' => 'required|string|max:255|min:1'
        ],[
            'descricao.required'=>'É necessário preencher a descrição!'
        ]);

        $genero = Genero::findOrFail($id);

        $genero->descricao = $request->input('descricao');

        $genero->save();

        return redirect()->route('generos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genero = Genero::findOrFail($id);
        $genero->delete();

        return redirect()->route('generos.index');
    }
}
