<x-app-layout>
    <body><br><br>
    <div class="container">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                <tr>
                    <td>{{$livro->id}}</td>
                    <td>{{$livro->titulo}}</td>
                    <td>
                        <a href="{{route('livros.show',$livro->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{route('livros.edit', $livro->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('livros.destroy', $livro->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{route('livros.create')}}" class="btn btn-success">Inserir novo livro</a>
    </div>
    </body>
</x-app-layout>