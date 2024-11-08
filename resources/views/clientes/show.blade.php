<x-app-layout>
    <body><br><br>
        <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Cliente: {{$cliente->id}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome:</td>
                    <td>{{$cliente->nome}}</td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td>{{$cliente->CPF}}</td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>{{$cliente->email}}</td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td>{{$cliente->telefone}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('clientes.index')}}" class="btn btn-primary">Voltar</a>
        </div>
    </body>
</x-app-layout>