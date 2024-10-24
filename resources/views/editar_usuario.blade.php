<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar usuário</title>
</head>
<body>
  <form action="/editar_usuario/{{$user->id}}" method="post">
    @csrf
    {{ method_field("PUT") }}
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$user->name}}">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" value="{{$user->cpf}}">

    <label for="email">Email</label>
    <input type="text" name="email" value="{{$user->email}}">

    <input type="submit" value="Salvar">
</form>
</body>
</html>