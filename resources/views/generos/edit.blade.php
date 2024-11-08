<x-app-layout>
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
</x-app-layout>