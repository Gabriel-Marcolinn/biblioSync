<x-app-layout>
<body>
    <form action="{{route('livros.store')}}" method="POST">
    @csrf
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="titulo" class="form-label text-white"><strong>Título:</strong></label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título do livro...">
                </div>

                <div class="mb-3">
                    <label for="linkIMG" class="form-label text-white"><strong>Foto:</strong></label>
                    <input type="text" class="form-control" id="linkIMG" name="linkIMG" placeholder="Digite o título do livro...">
                </div>

                <div class="mb-3">
                    <label for="data_lancamento" class="form-label text-white"><strong>Data de lançamento:</strong></label>
                    <input type="date" class="form-control" id="data_lancamento" name="data_lancamento" placeholder="Digite a data de lançamento do livro...">
                </div>
                
                <div class="mb-3">
                    <label for="autor" class="form-label text-white"><strong>Autor:</strong></label>
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Digite o autor do livro...">
                </div>
                
                <div class="mb-3">
                    <label for="localizacao" class="form-label text-white"><strong>Localização:</strong></label>
                    <input type="text" class="form-control" id="localizacao" name="localizacao" placeholder="Digite a localização do livro no acervo...">
                </div>

                <div class="mb-3">
                    <label for="genero_id" class="form-label text-white"><strong>Gênero:</strong></label>
                    <select name="genero_id" id="genero_id" required class="form-select">
                        <option value="" disabled selected> Selecione um Gênero</option>
                        @foreach($generos as $genero)
                            <option value="{{$genero->id}}">{{$genero->descricao}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="editora_id" class="form-label text-white"><strong>Editora:</strong></label>
                    <select name="editora_id" id="editora_id" required class="form-select">
                        <option value="" disabled selected> Selecione uma Editora</option>
                        @foreach($editoras as $editora)
                            <option value="{{$editora->id}}">{{$editora->nome}}</option>
                        @endforeach
                    </select>                
                </div>
                
                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea2" name="sinopse" placeholder="Digite a sinopse do livro..." style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Sinopse</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>                    
                </div>
                <a href="{{route('livros.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>
</body>
</x-app-layout>