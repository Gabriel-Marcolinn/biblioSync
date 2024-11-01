<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ItemEmprestimo;

class ItemEmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'quantidade.required' => 'A quantidade é obrigatória para cada item do empréstimo.',
            'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
            'quantidade.min' => 'A quantidade deve ser pelo menos 1.',
            'livro_id.required' => 'O livro é obrigatório para cada item do empréstimo.',
            'livro_id.exists' => 'O livro informado não existe.',
        ];
        
        $request->validate([
            'quantidade' => 'required|integer|min:1',
            'livro_id' => 'required|exists:livros,id',
        ], $messages);

        $item = ItemEmprestimo::create($request->all());

        return redirect() -> route('emprestimos.show',$request->input('emprestimo_id'))->with('success','Item criado com sucesso!');

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
        $item = ItemEmprestimo::findOrFail($id);
        $item->delete();
        return redirect()->route('emprestimos.show',$request->input('emprestimo_id'));
    }
}
