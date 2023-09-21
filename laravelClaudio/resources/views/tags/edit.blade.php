
    <form action="{{ route('tags.update', $tag->id) }}" method ="POST">
    @csrf
    @method("PUT")
    Titulo: <input type="text" name="title" value="{{$tag->title}}"> <br>
    <button type="submit">Enviar</button>
    </form>
