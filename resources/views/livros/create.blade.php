<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livros</title>
</head>
<body>
    <form action="{{route('livros.store')}}" method="POST">
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="titulo" class="form-label text-white"><strong>Título:</strong></label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título do livro...">
                </div>

                <div class="mb-3">
                    <label for="datalancamento" class="form-label text-white"><strong>Data de lançamento:</strong></label>
                    <input type="date" class="form-control" id="datalancamento" name="datalancamento" placeholder="Digite a data de lançamento do livro...">
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
                    <label for="datacadastro" class="form-label text-white"><strong>Data de Cadastro:</strong></label>
                    <input type="date" class="form-control" id="datacadastro" name="datacadastro" placeholder="Digite a data de cadastro do livro...">
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label text-white"><strong>Gênero:</strong></label>
                    <!--<input type="date" class="form-control" id="datacadastro" name="datacadastro" placeholder="Digite a data de cadastro do livro...">-->
                </div>

                <div class="mb-3">
                    <label for="editora" class="form-label text-white"><strong>Editora:</strong></label>
                    <!--<input type="date" class="form-control" id="datacadastro" name="datacadastro" placeholder="Digite a data de cadastro do livro...">-->
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
</x-app-layout>