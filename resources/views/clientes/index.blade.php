<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
    </head>
    <body><br><br>
    <div class="container">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nome}}</td>
                    <td>
                        <a href="{{route('clientes.show',$cliente->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{route('clientes.create')}}" class="btn btn-success">Inserir novo Cliente</a>
    </div>
    </body>
    </html>
</x-app-layout>