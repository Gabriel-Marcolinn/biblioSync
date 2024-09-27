<x-app-layout>
    <html>
        <head>

        </head>
        <body>
            <form action="">
                <div class="container">
                    <div class="col-6 mx-auto">
                        <div class="mb-3">
                            <label for="nome" class="form-label labels"><strong>Nome:</strong></label>
                            <input type="text" class="form-control" id="nome" placeholder="Digite o nome da editora...">
                        </div>
                        <div class="mb-3">
                            <label for="cnpj" class="form-label"><strong>CNPJ:</strong></label>
                            <input type="text" class="form-control" id="cnpj" placeholder="Digite o CNPJ da editora...">
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