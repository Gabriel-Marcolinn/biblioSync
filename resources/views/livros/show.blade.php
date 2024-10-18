<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livro</title>

        <link rel="stylesheet" href="{{ asset('css/livros.css') }}">
    </head>
    <body><br><br>
        <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Livro: {{$livro->id}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Título:</td>
                    <td>{{$livro->titulo}}</td>
                </tr>
                <tr>
                    <td>Data de Lançamento:</td>
                    <td>{{$livro->data_lancamento}}</td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td>{{$livro->autor}}</td>
                </tr>
                <tr>
                    <td>Localização:</td>
                    <td>{{$livro->localizacao}}</td>
                </tr>
                <tr>
                    <td>Gênero:</td>
                    <td>{{$livro->genero->descricao}}</td>
                </tr>
                <tr>
                    <td>Editora:</td>
                    <td>{{$livro->editora->nome}}</td>
                </tr>
                <tr>
                    <td>Sinopse:</td>
                    <td class="sinopse">{{$livro->sinopse}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('livros.index')}}" class="btn btn-primary">Voltar</a>
        </div>
    </body>
    </html>
</x-app-layout>