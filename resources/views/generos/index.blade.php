<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gêneros</title>
    </head>
    <body><br><br>
    <div class="container">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($generos as $genero)
                <tr>
                    <td>{{$genero->id}}</td>
                    <td>{{$genero->descricao}}</td>
                    <td>
                        <a href="{{route('generos.show',$genero->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{route('generos.edit', $genero->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('generos.destroy', $genero->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{route('generos.create')}}" class="btn btn-success">Inserir novo Gênero</a>
    </div>
    </body>
    </html>
</x-app-layout>