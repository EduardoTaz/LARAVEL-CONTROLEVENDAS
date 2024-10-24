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
        @foreach ($pedidos as $pedido)
            <thead>
                <ul>
                    <td>{{$pedido->user->id }}</td>
                    <td>{{$pedido->user->name}}</td>
                    <td>{{$pedido->calculateTotal()}}</td>
                </ul>
            </thead>
        @endforeach
    </table>    
</body>
</html>