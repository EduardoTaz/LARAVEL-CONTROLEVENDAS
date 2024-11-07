<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Pedido</title>
    <link rel="stylesheet" href="{{ url('css/cadastro_pedido.css') }}">
</head>
<body>
  <div class="pedido">

    <h1>Criar novo pedido</h1>

    <form action="/criar_pedido" method="post">
      @csrf
      <div class="form-group">

        <label for="user">Usuário:</label>
        <select name="user" id="user" required>
          <option value="">Selecione um usuáio</option>
            @foreach($users as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>  
            @endforeach
        </select>

      </div>

      <div class="form-group">

        <label>Produtos:</label>

        <ul class="produtos-list">
          @foreach($produtos as $produto)
            <li class="produto-item">
              <span>{{ $produto->nome }} - R$ {{ number_format($produto->preco, 2, ',', '.') }}</span>
              <input type="number" name="items[{{ $produto->id }}]" value="0" min="0" max="{{ $produto->quantidade }}" required>
            </li>
          @endforeach
        </ul>

      </div>

      <button type="submit" class="submit-btn">Cadastrar Pedido</button>
    </form>
  </div>
</body>
</html>
