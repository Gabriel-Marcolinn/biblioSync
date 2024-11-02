<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Emprestimo</title>
    </head>
    <body>
    <form action="{{route('emprestimos.update', $emprestimo->id)}}" method="POST">
        @csrf
        @method('PUT')
        <br><br>
        <div class="container">
            <div class="col-6 mx-auto">

            <div class="mb-3">
                <label for="cliente_id" class="form-label text-white"><strong>Cliente:</strong></label>
                    <select name="cliente_id" id="cliente_id" required class="form-select">
                        @foreach($clientes as $cliente)
                            <option value="{{$cliente->id}}" {{$emprestimo->cliente_id == $cliente->id ? 'selected' : ''}}>{{$cliente->nome}}</option>
                        @endforeach
                    </select>                
                </div>

                <div class="mb-3">
                    <label for="multaPct" class="form-label text-white"><strong>Multa Diária:</strong></label>
                    <input type="number" class="form-control" id="multaPct" name="multaPct" placeholder="Digite o valor de multa por dia de atraso...">
                </div>

                <div class="mb-3">
                    <label for="data_retirada" class="form-label text-white"><strong>Data de retirada:</strong></label>
                    <input type="date" class="form-control" id="data_retirada" name="data_retirada" value="{{old('data_retirada', $emprestimo->data_retirada)}}">
                </div>

                <div class="mb-3">
                    <label for="data_devolucao" class="form-label text-white"><strong>Data de Devolução:</strong></label>
                    <input type="date" class="form-control" id="data_devolucao" name="data_devolucao" value="{{old('data_devolucao', $emprestimo->data_devolucao)}}">
                </div>

                <div class="mb-3">
                    <label for="multa" class="form-label text-white"><strong>Multa:</strong></label>
                    <input type="text" class="form-control" id="multa" name="multa" value="{{old('multa', $emprestimo->multa)}}" readonly>
                </div>

                <div class="mb-3">
                    <label for="atraso" class="form-label text-white"><strong>Atraso:</strong></label>
                    <input type="text" class="form-control" id="atraso" name="atraso" value="{{old('atraso', $emprestimo->atraso)}}" readonly>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="{{route('emprestimos.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>            
        </div>
    </form>
    <script src="{{ asset('js/emprestimos.js') }}"></script>
    </body>
    </html>
</x-app-layout>