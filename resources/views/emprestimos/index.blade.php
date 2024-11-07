<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empréstimos</title>
    </head>
    <body><br><br>
    <div class="container">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Data de Retirada</th>  
                    <th>Data de Devolução</th>
                    <th>Atraso</th>   
                    <th>Multa</th>                     
                    <th>Ações</th>             
                </tr>
            </thead>
            <tbody>
                @foreach($emprestimos as $emprestimo)
                <tr>
                    <td>{{$emprestimo->id}}</td>
                    <td>{{$emprestimo->cliente->nome}}</td>
                    <td>{{date('d/m/Y',strtotime($emprestimo->data_retirada))}}</td>
                    <td>{{date ('d/m/Y',strtotime($emprestimo->data_devolucao))}}</td>
                    <td>{{$emprestimo->atraso}}</td>
                    <td>{{$emprestimo->multa}}</td>                    
                    <td>
                        <a href="{{route('emprestimos.show',$emprestimo->id)}}" class="btn btn-info">Itens</a>
                        <a href="{{route('emprestimos.edit', $emprestimo->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('emprestimos.destroy', $emprestimo->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{route('emprestimos.create')}}" class="btn btn-success">Inserir novo emprestimo</a>
    </div>
    </body>
    </html>
</x-app-layout>