<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Empréstimo</title>
    <!--rever bastante cálculos que podem ser feitos automaticamente-->
</head>
<body>
    <form action="{{route('emprestimos.store')}}" method="POST">
        <div class="container">
            <div class="col-6 mx-auto">

            <div class="mb-3">
                    <label for="multaPct" class="form-label text-white"><strong>Multa Diária:</strong></label>
                    <input type="number" class="form-control" id="multaPct" name="multaPct" placeholder="Digite o valor de multa por dia de atraso...">
                </div>

                <div class="mb-3">
                    <label for="dataretirada" class="form-label text-white"><strong>Data de retirada:</strong></label>
                    <input type="date" class="form-control" id="dataretirada" name="dataretirada" placeholder="Digite a data de retirada do empréstimo...">
                </div>

                <div class="mb-3">
                    <label for="datadevolucao" class="form-label text-white"><strong>Data de devolução:</strong></label>
                    <input type="date" class="form-control" id="datadevolucao" name="datadevolucao" placeholder="Digite a data de devolução do empréstimo...">
                </div>

                <div class="mb-3">
                    <label for="multa" class="form-label text-white"><strong>Multa:</strong></label>
                    <input type="number" step="0.01" class="form-control" id="multa" name="multa" placeholder="A Multa aparecerá aqui..." readonly>
                </div>

                <div class="mb-3">
                    <label for="atraso" class="form-label text-white"><strong>Atraso (dias):</strong></label>
                    <input type="number" class="form-control" id="atraso" name="atraso" placeholder="O atraso aparecerá aqui..." readonly>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label text-white"><strong>Cliente:</strong></label>
                    <!--<input type="text" class="form-control" id="dataretirada" name="dataretirada" placeholder="Digite a data de retirada do empréstimo...">-->
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>
                </div>
            </div>
        </div>
    </form>

    <script src="{{ asset('js/emprestimos.js') }}"></script>
</body>
</html>
</x-app-layout>