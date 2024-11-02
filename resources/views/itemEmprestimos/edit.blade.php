<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Itens Emprestimo</title>
    </head>
    <body>
    <form action="{{route('itemEmprestimos.update', $item->id)}}" method="POST">
        @csrf
        @method('PUT')
        <br><br>
        <div class="container">
            <div class="col-6 mx-auto">
            <input type="hidden" name="emprestimo_id" value="{{ $item->emprestimo_id }}">

            <div class="mb-3">
                <label for="livro_id" class="form-label text-white"><strong>Livro:</strong></label>
                    <select name="livro_id" id="livro_id" required class="form-select">
                        @foreach($livros as $livro)
                            <option value="{{$livro->id}}" {{$item->livro_id == $livro->id ? 'selected' : ''}}>{{$livro->titulo}}</option>
                        @endforeach
                    </select>                
                </div>

                <div class="mb-3">
                    <label for="quantidade" class="form-label text-white"><strong>Quantidade:</strong></label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{old('quantidade', $item->quantidade)}}">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="{{route('emprestimos.show', $item->emprestimo_id)}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>            
        </div>
    </form>
    </body>
    </html>
</x-app-layout>