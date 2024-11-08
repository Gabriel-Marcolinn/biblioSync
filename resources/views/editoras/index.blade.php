<x-app-layout>
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
                @foreach($editoras as $editora)
                <tr>
                    <td>{{$editora->id}}</td>
                    <td>{{$editora->nome}}</td>
                    <td>
                        <a href="{{route('editoras.show',$editora->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{route('editoras.edit', $editora->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('editoras.destroy', $editora->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{route('editoras.create')}}" class="btn btn-success">Inserir nova Editora</a>
    </div>
    </body>
</x-app-layout>