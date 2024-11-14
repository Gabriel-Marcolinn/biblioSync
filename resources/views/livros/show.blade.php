<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/livros.css') }}">
    </head>
    <body><br><br>
        <div class="container">

        @if(!empty($livro->linkIMG))
            <img src="{{$livro->linkIMG}}" alt="" class="rounded img-fluid mx-auto d-block" style="width: 200px; height:350px"><br><br>
        @endif
        
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
                    <td>{{date ('d/m/Y', strtotime($livro->data_lancamento))}}</td>
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
</x-app-layout>