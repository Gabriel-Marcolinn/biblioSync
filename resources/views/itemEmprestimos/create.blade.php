<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Itens do Emprestimo</title>
</head>
<body>
    <form action="{{route('livros.store')}}" method="POST">
        <div class="container">
            <div class="col-6 mx-auto">
                
                <div class="mb-3">
                    <label for="titulo" class="form-label text-white"><strong>Livro:</strong></label>
                    <!--<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título do livro...">-->
                </div>
            
                <div class="mb-3">
                    <label for="quantidade" class="form-label text-white"><strong>Quantidade:</strong></label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade dos livros...">
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