<x-app-layout>
<body>
    <form action="{{route('editoras.store')}}" method="POST">
        @csrf
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="nome" class="form-label text-white"><strong>Nome:</strong></label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da editora...">
                </div>
                <div class="mb-3">
                    <label for="cnpj" class="form-label text-white"><strong>CNPJ:</strong></label>
                    <input type="text" class="form-control" id="cnpj" name="CNPJ" placeholder="Digite o CNPJ da editora...">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>
                    </div><br><br><br><br><br><br><br><br><br><br><br>
                    <a href="{{route('editoras.index')}}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </form>
</body>
</x-app-layout>