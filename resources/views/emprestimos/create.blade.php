<x-app-layout>
<body>
    <form action="{{route('emprestimos.store')}}" method="POST">
    @csrf
        <div class="container">
            <div class="col-6 mx-auto">

            <div class="mb-3">
                    <label for="cliente_id" class="form-label text-white"><strong>Cliente:</strong></label>
                    <select name="cliente_id" id="cliente_id" required class="form-select">
                        <option value="" disabled selected> Selecione um Cliente</option>
                        @foreach($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="multaPct" class="form-label text-white"><strong>Multa Diária:</strong></label>
                    <input type="number" class="form-control" id="multaPct" name="multaPct" placeholder="Digite o valor de multa por dia de atraso...">
                </div>

                <div class="mb-3">
                    <label for="data_retirada" class="form-label text-white"><strong>Data de retirada:</strong></label>
                    <input type="date" class="form-control" id="data_retirada" name="data_retirada" placeholder="Digite a data de retirada do empréstimo...">
                </div>

                <div class="mb-3">
                    <label for="data_devolucao" class="form-label text-white"><strong>Data de devolução:</strong></label>
                    <input type="date" class="form-control" id="data_devolucao" name="data_devolucao" placeholder="Digite a data de devolução do empréstimo...">
                </div>

                <div class="mb-3">
                    <label for="multa" class="form-label text-white"><strong>Multa:</strong></label>
                    <input type="number" step="0.01" class="form-control" id="multa" name="multa" placeholder="A Multa aparecerá aqui..." readonly>
                </div>

                <div class="mb-3">
                    <label for="atraso" class="form-label text-white"><strong>Atraso (dias):</strong></label>
                    <input type="number" class="form-control" id="atraso" name="atraso" placeholder="O atraso aparecerá aqui..." readonly>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>
                </div><br><br>
                <a href="{{route('emprestimos.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

    <script src="{{ asset('js/emprestimos.js') }}"></script>
</body>
</x-app-layout>