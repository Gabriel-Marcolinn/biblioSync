<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//para comunicar a model com o controller
use App\Models\Editora;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //quando acessar o index, ele retorna a tela das editoras
        $editoras = Editora::all(); //all traz todas as informações da tabela
        return view('editoras.index', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //acessa o arquivo create
        return view ('editoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nome.required'=>'É necessário preencher o nome da editora!',
            'CNPJ.required'=>'É necessário preencher o CNPJ da editora!',
            'CNPJ.min'=>'É necessário preencher um mínimo de 6 caracteres no CNPJ!',
            'CNPJ.unique'=>'Esse CNPJ já está cadastrado para outra Editora!'
        ];
        //cria os dados
        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'nome' => 'required|string|max:255',
            'CNPJ' => 'required|string|max:20|min:6|unique:editoras,CNPJ'
        ],$messages);

        Editora::create($request->all());//cria e manda as coisas pro banco(editora é o model, create é o insert e o request )

        return redirect() -> route('editoras.index')->with('success', 'Editora criada com sucesso!');//retorna para o index - se quero ir pro create, deixo create
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $editora = Editora::findOrFail($id);
        return view('editoras.show',compact('editora'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editora = Editora::findOrFail($id);
        return view('editoras.edit',compact('editora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required'=>'É necessário preencher o nome da editora!',
            'CNPJ.required'=>'É necessário preencher o CNPJ da editora!',
            'CNPJ.min'=>'É necessário preencher um mínimo de 6 caracteres no CNPJ!',
            'CNPJ.unique'=>'Esse CNPJ já está cadastrado para outra Editora!'
        ];

        $request->validate([
            'nome' => 'required|string|max:255',
            'CNPJ' => 'required|string|max:20|min:6|unique:editoras,CNPJ,' . $id
        ],$messages);

        $editora = Editora::findOrFail($id);

        $editora->nome = $request->input('nome');
        $editora->CNPJ = $request->input('CNPJ');

        $editora->save();

        return redirect()->route('editoras.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $editora = Editora::findOrFail($id);
        $editora->delete();

        return redirect()->route('editoras.index');

    }
}
