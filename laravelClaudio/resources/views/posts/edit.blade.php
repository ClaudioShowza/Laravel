<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página create</title>
</head>
<body>
    <form action="{{ route('posts.update', $post->id) }}" method ="POST">
    @csrf
    @method("PUT")
    Titulo: <input type="text" name="title" value="{{$post->title}}"> <br>
    Conteudo: <input type="text" name="content" value="{{$post->content}}">
    <button type="submit">Enviar</button>
    </form>
</body>
</html>