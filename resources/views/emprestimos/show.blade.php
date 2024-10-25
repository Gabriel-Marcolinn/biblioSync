<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Itens Emprestimo</title>

    </head>
    <body><br><br>
        <div class="container">
            <h1 class="text-center">Adicione itens ao empréstimo {{$emprestimo->id}}</h1>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Livro</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Item:</td>
                    <td>{{$itemEmprestimo->titulo}}</td>
                </tr>
                <tr>
                    <td>Data de Lançamento:</td>
                    <td>{{$livro->data_lancamento}}</td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td>{{$livro->autor}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('livros.index')}}" class="btn btn-primary">Voltar</a>
        </div>
    </body>
    </html>
</x-app-layout>