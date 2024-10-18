<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro; //trazer o model de todas as tabelas
use App\Models\Genero;
use App\Models\Editora;
class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::with(['genero','editora'])->get(); //with traz as informações de todas as tabelas
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editoras= Editora::all();
        $generos = Genero::all();
        return view ('livros.create', compact('editoras','generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'titulo.required' => 'O título é obrigatório.',
            'titulo.string' => 'O título deve ser uma string.',
            'titulo.max' => 'O título não pode ter mais de 50 caracteres.',
            
            'datalancamento.required' => 'A data de lançamento é obrigatória.',
            'datalancamento.date' => 'A data de lançamento deve ser uma data válida.',
            
            'autor.required' => 'O autor é obrigatório.',
            'autor.string' => 'O autor deve ser uma string.',
            'autor.max' => 'O autor não pode ter mais de 50 caracteres.',
            
            'localizacao.required' => 'A localização é obrigatória.',
            'localizacao.string' => 'A localização deve ser uma string.',
            'localizacao.max' => 'A localização não pode ter mais de 5 caracteres.',

            'sinopse.max'=>'A Sinopse não pode ter mais de 800 caracteres',

            'editora_id.required' => 'A editora é obrigatória.',
            'editora_id.exists' => 'A editora informada não existe.',
            
            'genero_id.required' => 'O gênero é obrigatório.',
            'genero_id.exists' => 'O gênero informado não existe.'
        ];
        
        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'titulo' => 'required|string|max:50',
            'data_lancamento' => 'required|date',
            'autor' => 'required|string|max:50',
            'localizacao' => 'required|string|max:5',
            'sinopse'=>'max:800',
            'editora_id' => 'required|exists:editoras,id',
            'genero_id' => 'required|exists:generos,id',           
        ],$messages);
        Livro::create($request->all());//cria e manda as coisas pro banco

        return redirect() -> route('livros.index')->with('success', 'Livro criado com sucesso!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livro = Livro::with(['genero','editora'])->findOrFail($id);
        return view('livros.show',compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livro = Livro::findOrFail($id);
        $editoras=Editora::all();
        $generos=Genero::all();
        return view('livros.edit',compact('livro','editoras','generos'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'titulo.required' => 'O título é obrigatório.',
            'titulo.string' => 'O título deve ser uma string.',
            'titulo.max' => 'O título não pode ter mais de 50 caracteres.',
            
            'datalancamento.required' => 'A data de lançamento é obrigatória.',
            'datalancamento.date' => 'A data de lançamento deve ser uma data válida.',
            
            'autor.required' => 'O autor é obrigatório.',
            'autor.string' => 'O autor deve ser uma string.',
            'autor.max' => 'O autor não pode ter mais de 50 caracteres.',
            
            'localizacao.required' => 'A localização é obrigatória.',
            'localizacao.string' => 'A localização deve ser uma string.',
            'localizacao.max' => 'A localização não pode ter mais de 5 caracteres.',

            'sinopse.max'=>'A Sinopse não pode ter mais de 800 caracteres',

            'editora_id.required' => 'A editora é obrigatória.',
            'editora_id.exists' => 'A editora informada não existe.',
            
            'genero_id.required' => 'O gênero é obrigatório.',
            'genero_id.exists' => 'O gênero informado não existe.'

        ];
        
        $request->validate([    //verifica cada coluna do banco de dados, se tem o que quero nas colunas
            'titulo' => 'required|string|max:50',
            'data_lancamento' => 'required|date',
            'autor' => 'required|string|max:50',
            'localizacao' => 'required|string|max:5',
            'sinopse'=>'max:800',
            'editora_id' => 'required|exists:editoras,id',
            'genero_id' => 'required|exists:generos,id',                      
        ],$messages);

        $livro = Livro::findOrFail($id);

        $livro->titulo = $request->input('titulo');
        $livro->data_lancamento = $request->input('data_lancamento');
        $livro->editora_id = $request->input('editora_id');
        $livro->autor = $request->input('autor');
        $livro->localizacao = $request->input('localizacao');
        $livro->genero_id = $request->input('genero_id');
        $livro->sinopse = $request->input('sinopse');

        $livro->save();

        return redirect()->route('livros.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect()->route('livros.index');
    }
}
