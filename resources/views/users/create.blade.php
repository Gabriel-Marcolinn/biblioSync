<x-app-layout>
<body>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="mb-3">
                    <label for="name" class="form-label text-white"><strong>Nome:</strong></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do usuário...">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-white"><strong>E-mail:</strong></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail do usuário...">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-white"><strong>Senha</strong></label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label text-white"><strong>Confirmar Senha</strong></label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Apagar</button>
                </div><br><br><br>
                <a href="{{route('users.index')}}" class="btn btn-primary">Voltar</a>
            </div>            
        </div>
    </form>
</body>
</x-app-layout>