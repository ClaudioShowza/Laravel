<table class="table">
    <thead>
        <tr>
            <th>Tag</th>
            <th>Quantidade de Posts</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
        <tr>
            <td>
                <a href="{{ route('tags.show', $tag->id) }}">{{ $tag->title }}</a>
            </td>
            <td>{{ $tag->posts->count() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('tags.create') }}">Criar Nova Tag</a>