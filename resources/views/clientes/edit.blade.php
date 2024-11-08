<x-app-layout>
    <body>
    <form action="{{route('clientes.update', $cliente->id)}}" method="POST">
        @csrf
        @method('PUT')
        <br><br>
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="nome" class="form-label text-white"><strong>Nome:</strong></label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $cliente->nome)}}">
                </div>

                <div class="mb-3">
                    <label for="CPF" class="form-label text-white"><strong>CPF:</strong></label>
                    <input type="text" class="form-control" id="CPF" name="CPF" value="{{old('CPF', $cliente->CPF)}}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-white"><strong>E-mail:</strong></label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email', $cliente->email)}}">
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label text-white"><strong>Telefone:</strong></label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" value="{{old('telefone', $cliente->telefone)}}">
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="{{route('clientes.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>            
        </div>
    </form>
    </body>
</x-app-layout>