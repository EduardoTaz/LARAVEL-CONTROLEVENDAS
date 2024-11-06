<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Pedidos</title>
</head>
<body>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th width="20%">Usuário</th>
                <th>Produto</th>
                <th width="10%">Quantidade</th>
                <th width="20%">Preço Total</th>
                <th width="20%">Data do pedido</th>
            </tr>
        </thead>
        
        @foreach ($pedidos as $pedido)
            <tbody>
                <!-- Primeira linha: Nome do usuário, primeiro produto e total -->
                 <!-- => em PHP é usado para associar uma chave a um valor em arrays, -->
                  <!-- index é usado para indicar uma posição em um array -->
                @foreach ($pedido->items as $index => $item)
                    <tr>
                        <!-- Usei $index com 0 para que o nome do usuário e o total só apareçam na primeira linha de cada pedido. -->
                        @if ($index === 0)
                            <!--Rowspan para mesclar assim que apareça mais pedidos-->
                            <!--Count serve para contar quantos elementos estão presentes em um array, ele retorna a quantidade de items em $pedido->items-->
                            <td rowspan="{{ count($pedido->items) }}">{{ $pedido->user->name }}</td>
                        @endif

                        <!-- Produto e quantidade -->
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->pivot->quantidade }}</td>

                        <!-- Usei $index com 0 para que o nome do usuário e o total só apareçam na primeira linha de cada pedido. -->
                        @if ($index === 0)
                        <!--Count serve para contar quantos elementos estão presentes em um array, ele retorna a quantidade de items em $pedido->items-->
                            <td rowspan="{{ count($pedido->items) }}">R$ {{ $pedido->calculateTotal() }}</td>
                        @endif

                        @if ($index === 0)
                            <td>{{$item->pivot->created_at}}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        @endforeach
    </table>    
</body>
</html>
