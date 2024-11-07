<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Produto</title>
    <link rel="stylesheet" href="{{url('css/cadastro_produto.css')}}">
</head>
<body>
    <form action="/criar_produto" method="post">
        @csrf
        <h1>Criar Novo Produto</h1>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" required>
        </div>

        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" required>
        </div>

        <input type="submit" value="Salvar" class="submit">
    </form>
</body>
</html>
