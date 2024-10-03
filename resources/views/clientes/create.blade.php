<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <form action="{{route('clientes.store')}}" method="POST">
        @csrf
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="nome" class="form-label text-white"><strong>Nome:</strong></label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do cliente...">
                </div>

                <div class="mb-3">
                    <label for="CPF" class="form-label text-white"><strong>CPF:</strong></label>
                    <input type="text" class="form-control" id="CPF" name="CPF" placeholder="Digite o CPF do cliente...">
                </div>


                <div class="mb-3">
                    <label for="telefone" class="form-label text-white"><strong>Telefone:</strong></label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone do cliente...">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-white"><strong>E-Mail:</strong></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail do cliente...">
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