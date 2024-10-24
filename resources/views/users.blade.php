<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if(count($users) == 0)
    <h3>Sem usuários</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    @foreach ($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->cpf}}</td>
          <td>{{$user->email}}</td>
          <td>
            <form method="POST" action="/deletar_usuario/{{$user->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete user">
            </form>

            <a href="/editar_usuario/{{$user->id}}">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>