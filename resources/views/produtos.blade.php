<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Produtos</title>
  <link rel="stylesheet" href="{{url('css/lista_produtos.css')}}">
</head>
<body>

  <div class="container">

    @if(count($produtos) == 0)
      <h3 class="no-products">Sem produtos cadastrados</h3>
    @else

      <h1>Produtos Cadastrados</h1>

      <table>

        <thead>
          <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ação</th>
          </tr>
        </thead>

        <tbody>

          @foreach ($produtos as $produto)
            <tr>
              <td>{{$produto->nome}}</td>
              <td>{{$produto->descricao}}</td>
              <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
              <td>
                <form method="POST" action="/deletar_produto/{{$produto->id}}">
                  @csrf
                  {{ method_field("DELETE") }}
                  <input type="submit" value="Deletar Produto">
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
        
      </table>
    @endif
  </div>

</body>
</html>
