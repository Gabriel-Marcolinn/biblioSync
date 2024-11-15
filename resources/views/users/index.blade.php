<x-app-layout>
<body><br><br>
@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="container">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Editar</a>
                        @if($user->id !== auth()->id())
                            <form action="{{route('users.destroy', $user->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-danger" disabled>Deletar</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{route('users.create')}}" class="btn btn-success">Inserir novo Usuário</a>
    </div>
    </body>
</x-app-layout>