<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Genero</title>
    </head>
    <body>
    <form action="{{route('generos.update', $genero->id)}}" method="POST">
        @csrf
        @method('PUT')
        <br><br>
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="descricao" class="form-label text-white"><strong>Descrição:</strong></label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{old('descricao', $genero->descricao)}}">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="{{route('generos.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>            
        </div>
    </form>

    </body>
    </html>
</x-app-layout>