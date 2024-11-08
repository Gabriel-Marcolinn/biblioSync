<x-app-layout>
    <body>
    <form action="{{route('editoras.update', $editora->id)}}" method="POST">
        @csrf
        @method('PUT')
        <br><br>
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="nome" class="form-label text-white"><strong>Nome:</strong></label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $editora->nome)}}">
                </div>

                <div class="mb-3">
                    <label for="CNPJ" class="form-label text-white"><strong>CNPJ:</strong></label>
                    <input type="text" class="form-control" id="CNPJ" name="CNPJ" value="{{old('CNPJ', $editora->CNPJ)}}">
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="{{route('editoras.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>            
        </div>
    </form>
    </body>
</x-app-layout>