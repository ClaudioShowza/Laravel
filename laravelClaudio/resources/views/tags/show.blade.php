
    <h1>{{ $tag->title }}</h1>
    <a href = "{{route('tags.edit', $tag->id)}}">Editar</a>
    <form method ="POST" action = "{{route('tags.destroy', $tag->id)}}">
        @csrf
        @method('DELETE')
        <button type = "submit">Enviad</button>
</form>