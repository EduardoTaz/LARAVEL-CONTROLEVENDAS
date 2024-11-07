<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de Usuários</title>
  <link rel="stylesheet" href="{{url('css/lista_usuario.css')}}">
</head>
<body>

  <div class="container">

    @if(count($users) == 0)
      <h3 class="no-users">Sem usuários cadastrados</h3>
    @else

      <h1>Usuários Cadastrados</h1>

      <table>

        <thead>
          <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Ações</th>
          </tr>
        </thead>


        <tbody>

          @foreach ($users as $user)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->cpf}}</td>
              <td>{{$user->email}}</td>
              <td>
                <form method="POST" action="/deletar_usuario/{{$user->id}}">
                  @csrf
                  {{ method_field("DELETE") }}
                  <input type="submit" value="Deletar">
                </form>
                <a href="/editar_usuario/{{$user->id}}">Editar</a>
              </td>
            </tr>
          @endforeach

        </tbody>

      </table>
    @endif
  </div>

</body>
</html>
