<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Livro</title>
    </head>
    <body>
    <form action="{{route('livros.update', $livro->id)}}" method="POST">
        @csrf
        @method('PUT')
        <br><br>
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="titulo" class="form-label text-white"><strong>Título:</strong></label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo', $livro->titulo)}}">
                </div>

                <div class="mb-3">
                    <label for="data_lancamento" class="form-label text-white"><strong>Data de Lançamento:</strong></label>
                    <input type="text" class="form-control" id="data_lancamento" name="data_lancamento" value="{{old('data_lancamento', $livro->data_lancamento)}}">
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label text-white"><strong>Autor:</strong></label>
                    <input type="text" class="form-control" id="autor" name="autor" value="{{old('autor', $livro->autor)}}">
                </div>

                <div class="mb-3">
                    <label for="localizacao" class="form-label text-white"><strong>Localizacao:</strong></label>
                    <input type="text" class="form-control" id="localizacao" name="localizacao" value="{{old('localizacao', $livro->localizacao)}}">
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label text-white"><strong>Gênero:</strong></label>
                    <input type="text" class="form-control" id="genero" name="genero" value="{{old('genero', $livro->genero)}}">
                </div>

                <div class="mb-3">
                    <label for="editora" class="form-label text-white"><strong>Editora:</strong></label>
                    <input type="text" class="form-control" id="editora" name="editora" value="{{old('editora', $livro->editora)}}">
                </div>

                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea2" name="sinopse" placeholder="Digite a sinopse do livro..." style="height: 200px">{{ old('sinopse', $livro->sinopse) }}</textarea>
                    <label for="floatingTextarea2">Sinopse</label>
                </div>


                
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="{{route('livros.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>            
        </div>
    </form>

    </body>
    </html>
</x-app-layout>