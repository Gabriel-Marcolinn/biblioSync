<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gênero</title>
    </head>
    <body><br><br>
        <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Gênero: {{$genero->id}}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Descrição:</td>
                    <td>{{$genero->descricao}}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('generos.index')}}" class="btn btn-primary">Voltar</a>
        </div>
    </body>
    </html>
</x-app-layout>