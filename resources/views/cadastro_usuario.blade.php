<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Usuário</title>
    <link rel="stylesheet" href="{{url('css/cadastro_usuario.css')}}">
</head>
<body>
    <form action="/criar_usuario" method="post">
        @csrf
        <h1>Criar Novo Usuário</h1>

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <input type="submit" value="Salvar" class="submit">
    </form>
</body>
</html>
