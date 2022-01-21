<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locais</title>
</head>

<body>
    <h1>Editar Local</h1>


    <form action="/places/update/{{ $place->id }}" method="POST">
        @csrf
        <input name="name" placeholder="Nome" value="{{ $place->name }}">
        <input name="description" placeholder="Descrição" value="{{ $place->description }}">
        <input name="address" placeholder="Endereço" value="{{ $place->address }}">
        <button type="submit">Enviar</button>
    </form>
    <a href="/places/delete/{{ $place->id }}">Deletar</a>

</body>

</html>
