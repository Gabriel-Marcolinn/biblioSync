<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Emprestimo;
use App\Models\Cliente;
use App\Models\ItemEmprestimo;
use App\Models\Livro;

class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emprestimos = Emprestimo::with(['cliente'])->get(); //all traz todas as informações da tabela
        return view('emprestimos.index', compact('emprestimos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes= Cliente::all();
        return view ('emprestimos.create',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'data_retirada.date' => 'A data de retirada deve ser uma data válida.',
            
            'data_devolucao.date' => 'A data de devolução deve ser uma data válida.',
            
            'multa.numeric' => 'A multa deve ser um valor numérico.',
            'multa.min' => 'A multa não pode ser um valor negativo.',
            
            'atraso.integer' => 'O atraso deve ser um valor inteiro.',
            'atraso.min' => 'O atraso não pode ser um valor negativo.',
                        
            'cliente_id.required' => 'O cliente é obrigatório.',
            'cliente_id.exists' => 'O cliente informado não existe.',
        ];
        
        $request->validate([
            'data_retirada' => 'nullable|date',
            'data_devolucao' => 'nullable|date|after_or_equal:data_retirada',
            'multa' => 'nullable|numeric|min:0',
            'atraso' => 'nullable|integer|min:0',
            'cliente_id' => 'required|exists:clientes,id',
        ], $messages);

        $emprestimo = Emprestimo::create($request->all());

        return redirect() -> route('emprestimos.show',$emprestimo->id)->with('success','Empréstimo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emprestimo = Emprestimo::with('itemEmprestimo')->findOrFail($id);
        $livros = Livro::all();

        return view('emprestimos.show',compact('emprestimo', 'livros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $emprestimo = Emprestimo::findOrFail($id);
        $clientes = Cliente::all();
        return view('emprestimos.edit',compact('emprestimo','clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'data_retirada.date' => 'A data de retirada deve ser uma data válida.',
            
            'data_devolucao.date' => 'A data de devolução deve ser uma data válida.',
            
            'multa.numeric' => 'A multa deve ser um valor numérico.',
            'multa.min' => 'A multa não pode ser um valor negativo.',
            
            'atraso.integer' => 'O atraso deve ser um valor inteiro.',
            'atraso.min' => 'O atraso não pode ser um valor negativo.',
            
            
            'cliente_id.required' => 'O cliente é obrigatório.',
            'cliente_id.exists' => 'O cliente informado não existe.',
        ];
        
        $request->validate([
            'data_retirada' => 'nullable|date',
            'data_devolucao' => 'nullable|date|after_or_equal:data_retirada',
            'multa' => 'nullable|numeric|min:0',
            'atraso' => 'nullable|integer|min:0',
            'cliente_id' => 'required|exists:clientes,id',
        ], $messages);

        $emprestimo = Emprestimo::findOrFail($id);

        $emprestimo->data_retirada = $request->input('data_retirada');
        $emprestimo->data_devolucao = $request->input('data_devolucao');
        $emprestimo->multa = $request->input('multa');
        $emprestimo->atraso = $request->input('atraso');
        $emprestimo->cliente_id = $request->input('cliente_id');

        $emprestimo->save();
        return redirect()->route("emprestimos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emprestimo = Emprestimo::findOrFail($id);
        $emprestimo->itemEmprestimo()->delete();
        $emprestimo->delete();
        return redirect()->route('emprestimos.index');
    }
}
