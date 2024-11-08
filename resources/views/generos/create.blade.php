<x-app-layout>
<body>
    <form action="{{route('generos.store')}}" method="POST">
        @csrf
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="descricao" class="form-label text-white"><strong>Descrição:</strong></label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição do gênero...">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>
                </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <a href="{{route('generos.index')}}" class="btn btn-primary">Voltar</a>
            </div>            
        </div>
    </form>
</body>
</x-app-layout>