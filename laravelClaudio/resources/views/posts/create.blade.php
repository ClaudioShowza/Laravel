<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página create</title>
</head>
<body>
    <form action="{{ route('posts.store') }}" method ="POST">
    @csrf
    Titulo: <input type="text" name="title"> <br>
    Conteudo: <input type="text" name="content">
    <button type="submit">Enviar</button>
    </form>
</body>
</html>