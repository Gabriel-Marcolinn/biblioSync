<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Editora</title>
</head>
<body>
    <form action="{{route('editoras.store')}}" method="POST">
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="nome" class="form-label text-white"><strong>Nome:</strong></label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da editora...">
                </div>
                <div class="mb-3">
                    <label for="cnpj" class="form-label text-white"><strong>CNPJ:</strong></label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Digite o CNPJ da editora...">
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