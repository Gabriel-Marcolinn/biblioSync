<x-app-layout>
    <body><br><br>
    <div class="container text-white">
        <h1 class="display-5 text-center">Empréstimo #{{ $emprestimo->id }}</h1><br><br>

        <div class="fs-4">
            <p>Cliente: {{ $emprestimo->cliente->nome }}</p>
            <p>Data de Retirada: {{date('d/m/Y',strtotime($emprestimo->data_retirada))}}</p>
        </div><br><hr><br>
        <h1 class="display-6">Itens:</h1>
    <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>                   
                    <th>Livro</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                @endforeach
                @foreach($emprestimo->itemEmprestimo as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->livro->titulo}}</td>
                    <td>{{$item->quantidade}}</td>                    
                    <td>
                        <a href="{{route('itemEmprestimos.edit', $item->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('itemEmprestimos.destroy', $item->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table><br><hr><br>


    <h1 class="display-6">Adicionar itens:</h1>
    <form action="{{ route('itemEmprestimos.store') }}" method="POST">
        @csrf
        <input type="hidden" name="emprestimo_id" value="{{ $emprestimo->id }}">

        <div class="mb-3">
            <label for="quantidade" class="form-label text-white"><strong>Quantidade:</strong></label>
            <input type="number" class="form-control form-control-sm" id="quantidade" name="quantidade" placeholder="Digite a quantidade de unidades do livro..." min="1">
        </div>

        <div class="mb-3">
                    <label for="livro_id" class="form-label text-white"><strong>Livro:</strong></label>
                    <select name="livro_id" id="livro_id" required class="form-select">
                        <option value="" disabled selected> Selecione um livro</option>
                        @foreach($livros as $livro)
                            <option value="{{$livro->id}}">{{$livro->titulo}}</option>
                        @endforeach
                    </select>
                </div>

       <button type="submit" class="btn btn-primary">Adicionar Item</button>
    </form><br>
      <a href="{{route('emprestimos.index')}}" class="btn btn-primary">Voltar</a>
    </div>
</x-app-layout>